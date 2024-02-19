<?php 
    $name = $_REQUEST['name'];
    
    
    if($name == ""){
        echo "null value. input a valid name";
    }else{
        echo "your name is: ",$name;
    }
?>