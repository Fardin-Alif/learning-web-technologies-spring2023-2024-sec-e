<html>
    <head>
        <title>html form</title>
    </head>
    <body>  
        <form method="post" action="" enctype="">
            <fieldset style="width:200px">
                <legend><b>NAME</b></legend>
                <input type="text" name="name" value="" required/> <br>
                <input type="submit" name="" value="Submit"/>
            </fieldset>

        </form>

<?php
    
    $name = $_REQUEST['name'];
    
    echo "Name: ",$name;
  
?>
</body>

</html>