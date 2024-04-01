<html>
<head>
    <title>html form</title>
</head>
<body>  
    <form method="post" action="">
        <fieldset style="width:200px">
            <legend><b>NAME</b></legend>
            <input type="text" name="name" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']):' ';?>" required />
            <hr style="width:220px" align="left">
            <input type="submit" name="submit" value="Submit"/>
        </fieldset>
    </form>
    
    <?php 
        $name = $_REQUEST['name'];
        echo "your name: ", $name;
    ?>
</body>
</html>