(function ($){

    $('#cost_calculator').submit(function(){

        $route = $('#transport_route');
        $cargo = $('#cargo_amount');

        if($route.val() == "")
        {
            alert('Please select a route.');
            return false;
        }

        if($cargo.val() == "")
        {
            alert('Please enter the M3 required for transport');
            return false;
        }

        transport_cost = parseInt($route.val()) * parseInt($cargo.val());
        $('#total_costs').val(numberWithCommas(transport_cost));
        
        return false;
    });

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

}( jQuery ));