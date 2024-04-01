<html>
    <head>
        <title>html form</title>
    </head>
    <body>
        <form method="post" action="">
            <fieldset style="width:100px">
                <legend><b>DATE OF BIRTH</b></legend>
                <table border="0">
                    <tr>
                        <td>dd <br><input style="width: 60px;" type="number" name="dd" value="" required/> /</td>
                            <td>mm <br><input style="width: 60px;" type="number" name="mm" value="" required/> /</td>
                            <td>yyyy<br><input style="width: 60px;" type="number" name="yyyy" value="" required/></td>
                    </tr>
                </table>
                <hr style="width:220px" align="left">
                <input type="submit" name="submit" value="Submit" />
            </fieldset>
        </form>
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
</body>

</html>