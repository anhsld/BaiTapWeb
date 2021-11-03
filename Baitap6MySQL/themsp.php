<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <title>Untitle</title>
</head>

<body>
    <?php
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == "done")
            echo "<div style='color:white; background-color:green;padding:5px;' >Them thanh cong!</div>";

        echo "<div style='color:white; background-color:red;padding:5px;' >Them khong thanh cong!</div>";
    }
    require_once("db_module.php");
    ?>
<form method="post" action="xulysp.php">
    <label for="iddm">Chon DM:</label>
    <select name="iddm">
        <?php 
        $link=null;
        taoKetNoi($link);
        $result=chayTruyVanKhongTraVeDL($link="select*form tbl_danhmuc");
        while ($row=mysqli_fetch_assoc($result))
            echo"<option value='".$row['id']."'>".$row['ten']."<option/>";
            giaiPhongBoNho($link,$result);
        ?>
    </select> <br/>
    <label for="tensp">Ten SP:</label>
    <input type="text" name="tensp"><br/>
    <label for="mota">Mo ta:</label>
    <textarea name="mota" style="width: 300px; height:200px; text-align:left;"></textarea> <br/>
    <label for="gia">Gia:</label>
    <input type="number" name="gia"> <br/>
    <input type="submit" name="ThemSP"> 
    <input type="reset" name="Lam Trong">     
</form>

</body>

</html>