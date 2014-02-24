(function ($)
{

    document.test = "data";

    $tableBody = $('#datatable > tbody');
    $data = null;
    count=1;

    $.getJSON( "/data/ore-value.json.php", function( data ) {
        $data = $(data);
        $.each( data, function( key, val ){
            $row = $('<tr>');
            $row.append($('<td style="text-align: center;"><input class="typeid-' + val.typeid + ' compressed" type="checkbox" value="1" /></td>'))
            $row.append($('<td style="text-align: center;">' +  val.typename + '</td>'));
            
            $row.append($('<td style="text-align: center;" class="value"><input type="text" class="typeid-' + val.typeid + ' value" style="color: #000; text-align: right;" readonly="true" value="' + val.value + '" /></td>'));
            
            $row.append($('<td style="text-align: center;"><input type="text" class="typeid-' + val.typeid + ' units" style="text-align: right;" name="" placeholder="Units of ore" tabindex="' + count++ + '"/></td>'));
            $row.append($('<td><input type="text" class="typeid-' + val.typeid + ' totalvalue" style="color: #000; text-align: right;" data-val="true" readonly="true" value="0" /></td>'));
            $tableBody.append($row);
        });
        
        $('.value').on('keydown', function(e){ if (e.keyCode == 9)  e.preventDefault() });
        $('.totalvalue').on('keydown', function(e){ if (e.keyCode == 9)  e.preventDefault() });
        

        // $('.compressed').change(function(){
        //     calculateTotals();
        // });
        

    });

    $('document').ready(function(){
        $('#start-calc').click(function()
        {
            calculateTotals();
        });        

        $('#post-tax').bind('focus', function(data)
        {
            var $this = $(this);
            amount = parseFloat($this.val().replace(/\,/g,''))
            $this.val(amount.toFixed(2));
            $this.select();

            // Work around Chrome's little problem
            $this.mouseup(function() {
                // Prevent further mouseup intervention
                $this.unbind("mouseup");
                return false;
            });

        });

        $('#post-tax').bind('blur', function(data)
        {
            amount = parseFloat($(this).val().replace(/\,/g,''))
            $(this).val(formattedNumber(amount.toFixed(2)));
        });

    });

    function calculateTotals()
    {

        $('.totalvalue').val(0);

        $data.each(function(idx, item){

            $units = $('.units.typeid-' + item.typeid);

            if($units.val() != "")
            {
                if($('.compressed.typeid-' + item.typeid).is(':checked'))
                {
                    compRatio = parseInt(item.compressRatio);
                }
                else
                {
                    compRatio = 1;
                }

                $units = parseInt($('.units.typeid-' + item.typeid).val()) * compRatio; 
                $value = parseFloat($('.value.typeid-' + item.typeid).val()) * 100.00;

                total = ($units * $value) / 100;
                
                $('.totalvalue.typeid-' + item.typeid).val(formattedNumber(total.toFixed(2)));

            }
        });

        totalValue = 0.00;
        
        $('.totalvalue').each(function(idx, amount)
        {
            $amount = parseFloat($(amount).val().replace(/\,/g,''));
            if($amount != "")
            {
                totalValue += ($amount * 100);
            }
        });

        // Figure out the 
        totalValue = totalValue/100;
        $("#pre-tax").val(formattedNumber(totalValue.toFixed(2))); 
        taxRate = (100 - parseInt($("#tax-rate").val())) / 100;
        taxedValue = totalValue * taxRate;
        $("#post-tax").val(formattedNumber(taxedValue.toFixed(2))); 
    }
    
    function formattedNumber(finalNumber)
    {
        return finalNumber.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
}
( jQuery ));
















