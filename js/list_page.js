$(document).ready(function() {
    
    $("#find_button").button();
    $(".room_btn").button();
    $(".select").selectmenu();

    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 5000,
        values: [0,5000],
        slide: function(event, ui) {
            $( "#price" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });

    $( "#price" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );

    
    $(".date").datepicker({
        dateFormat: 'dd/mm/yy'
    });

});