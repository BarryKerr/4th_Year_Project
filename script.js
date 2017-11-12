/**
 * Created by barry on 10/03/2017.
 */
/*  jQuery ready function. Specify a function to execute when the DOM is fully loaded.  */
$(document).ready(

    /* This is the function that will get executed after the DOM is fully loaded */
    function () {
        $("#datepicker1").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#datepicker2").datepicker({ dateFormat: 'yy-mm-dd' });


        $( "#datepicker1" ).datepicker({
            changeMonth: true,//this option for allowing user to select month
            changeYear: true //this option for allowing user to select from year range
        });
        $( "#datepicker2" ).datepicker({
            changeMonth: true,//this option for allowing user to select month
            changeYear: true //this option for allowing user to select from year range
        });
    }

);
