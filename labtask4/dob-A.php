<?php 
    $date = $_REQUEST['dd'];
    $month = $_REQUEST['mm'];
    $year = $_REQUEST['dd'];

    
    
    if($date == "" || $month == ""|| $year == ""){
        echo "null value";
    }else{
        echo "date: $date<br>";
        echo "month: $month<br>";
        echo "yeah: $year";
    }
?>