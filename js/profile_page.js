
var sortableOrder;

$(document).ready(function() {

    $(".favorites").sortable({
        opacity : 0.5,
        placeholder : 'ui-state-highlight',
        cursor : "true"
    });

    sortableOrder = $("#playlist").sortable("toArray"); 


});



$(window).on ("load" ,function() {


 


});