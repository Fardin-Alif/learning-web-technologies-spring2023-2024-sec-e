<html>
    <head>
        <title>html form</title>
    </head>
    <body>  
        <form method="post" action="" enctype="">
            <fieldset style="width:200px">
                <legend><b>EMAIL</b></legend>
                <input type="email" name="email" value="" required/>  <br>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
            
        </form>
        <?php 
            $email = $_POST['email'];
    
    
            if($email == ""){
                echo "null value. input a valid email";
            }else{
                echo "your email is: ",$email;
            }
        ?>
</body>

</html>