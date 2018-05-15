
$(document).ready(function() {

    $( ".select" ).selectmenu();
    $(".date").datepicker({
        dateFormat: 'dd/mm/yy'
    });
    $("#search-button").button();

});

$(window).on ("load" ,function() {


    $("form").submit( function() {

        if (($("#city").val() !== null ) || 
            ($("#room").val() !== null ) || 
            ($("#check-in").val() !== "" ) ||
            ($("#check-out").val() !== "" ))
            
        {
            $('#search-button').prop('disabled',true);
            //form is validate continue

        } else {
            console.log($("#city").val());
            console.log($("#room").val());
            console.log($("#check-in").val());
            console.log($("#check-out").val());
            $("#dialog1").removeAttr("hidden").dialog({
                modal: true,
                resizable: false,
                draggable: false,
                hide: "explode",
                buttons: {
                    "Confirm": function () {
                        // code executed when "Confirm" button is clicked
                        $(this).dialog('close');
                    },
                    "Cancel": function () {
                        // code executed when "Cancel" button is clicked
                        $(this).dialog('close');
                    }
                } // end buttons
            });
            return false;
        }

    });



});




