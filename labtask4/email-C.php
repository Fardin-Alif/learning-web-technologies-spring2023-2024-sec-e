<html>
    <head>
        <title>html form</title>
    </head>
    <body>  
        <form method="post" action="" enctype="">
            <fieldset style="width:200px">
                <legend><b>EMAIL</b></legend>
                <input type="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']):' ';?>" required/>
                <hr style="width:220px" align="left">
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
            
        </form>
            <?php 
                $email = $_REQUEST['email'];
                    if($email == "")
                        {
                            echo "null value";
                        }
                    else
                        {
                            echo "your email: ",$email;
                        }
            ?>
</body>

</html>