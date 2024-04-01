<?php 
    $email = $_REQUEST['email'];
    
    
    if($email == ""){
        echo "null value. input a valid email";
    }else{
        echo "your email is: ",$email;
    }
?>