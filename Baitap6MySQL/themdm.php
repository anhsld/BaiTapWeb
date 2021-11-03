<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>Untitle</title>
    </head>
    <body>
        <?php
        if (isset($_GET['msg'])){
            if($_GET['msg']=="done")
            echo "<div style ='color:white; background-color:green; padding:5px;'>Them thanh cong! </div>";
             else
             echo "<div style ='color:white; background-color:red; padding:5px;'>Them khong thanh cong! </div>";
        }            
        ?>
        <form method ="post" action = "xulydm.php">
                <label for="tendm">Ten DM</label>
                <input type="text" name="tendm"><br/>
                <input type="submit" value="Them DM">
                <input type="reset" value="Lam Rong">              
        </form>
        
        
    </body>
</html>