/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(window).on ("load" ,function() {

       
            $("#dialog1").removeAttr("hidden").dialog({
                modal: true,
                resizable: false,
                draggable: false,
                hide: "explode",
                buttons: {
                    "Confirm": function () {
                        // code executed when "Confirm" button is clicked
                        $(this).dialog('close');
                        window.location.replace("landing_page.php");
                    } 
                } // end buttons
            });
            
            $("#dialog2").removeAttr("hidden").dialog({
                modal: true,
                resizable: false,
                draggable: false,
                hide: "explode",
                buttons: {
                    "Confirm": function () {
                        // code executed when "Confirm" button is clicked
                        $(this).dialog('close');
                        window.location.replace("landing_page.php");
                    } 
                } // end buttons
            });
            
            $("#dialog3").removeAttr("hidden").dialog({
                modal: true,
                resizable: false,
                draggable: false,
                hide: "explode",
                buttons: {
                    "Confirm": function () {
                        // code executed when "Confirm" button is clicked
                        $(this).dialog('close');
                        window.location.replace("landing_page.php");
                    } 
                } // end buttons
            });

    });