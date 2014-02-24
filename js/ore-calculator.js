(function ($)
{

    document.test = "data";

    $tableBody = $('#datatable > tbody');
    $data = null;
    count=1;

    // Retrieve the ore value json from the cache file.
    $.getJSON( "/data/ore-value.json.php", function( data ) {
        $data = $(data);
        
        // For each ore build a table row with the necessary classes based on typename/typeid
        $.each( data, function( key, val ){
            $row = $('<tr>');
            $row.append($('<td style="text-align: center;"><input class="typeid-' + val.typeid + ' compressed" type="checkbox" value="1" /></td>'))
            $row.append($('<td style="text-align: center;">' +  val.typename + '</td>'));
            
            $row.append($('<td style="text-align: center;" class="value"><input type="text" class="typeid-' + val.typeid + ' value" style="color: #000; text-align: right;" readonly="true" value="' + val.value + '" /></td>'));
            
            $row.append($('<td style="text-align: center;"><input type="text" class="typeid-' + val.typeid + ' units" style="text-align: right;" name="" placeholder="Units of ore" tabindex="' + count++ + '"/></td>'));
            $row.append($('<td><input type="text" class="typeid-' + val.typeid + ' totalvalue" style="color: #000; text-align: right;" data-val="true" readonly="true" value="0" /></td>'));
            $tableBody.append($row);
        });
        
        // Disable the default tab ability on fields that are read only
        $('.value').on('keydown', function(e){ if (e.keyCode == 9)  e.preventDefault() });
        $('.totalvalue').on('keydown', function(e){ if (e.keyCode == 9)  e.preventDefault() });
    });

    $('document').ready(function(){
        
        // When the calcu button is clicked
        $('#start-calc').click(function()
        {
            calculateTotals();
        });        

        // When focused remove the commas and select the text
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

        // When blurred add the commas back.
        $('#post-tax').bind('blur', function(data)
        {
            amount = parseFloat($(this).val().replace(/\,/g,''))
            $(this).val(formattedNumber(amount.toFixed(2)));
        });

    });

    /*
     * Calculate the totals.
     */
    function calculateTotals()
    {

        // Set all the totals to defailt at 0
        $('.totalvalue').val(0);

        // Get the line totals and format them properly
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

        // Take all the line totals and add them to total value
        // (maybe consolidate this with the code above at a later date.)
        totalValue = 0.00;
        
        $('.totalvalue').each(function(idx, amount)
        {
            $amount = parseFloat($(amount).val().replace(/\,/g,''));
            if($amount != "")
            {
                totalValue += ($amount * 100);
            }
        });

        // Figure out the taxed value.
        totalValue = totalValue/100;
        $("#pre-tax").val(formattedNumber(totalValue.toFixed(2))); 
        taxRate = (100 - parseInt($("#tax-rate").val())) / 100;
        taxedValue = totalValue * taxRate;
        $("#post-tax").val(formattedNumber(taxedValue.toFixed(2))); 
    }
    
    // Add commas tothe number
    function formattedNumber(finalNumber)
    {
        return finalNumber.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
}
( jQuery ));
















