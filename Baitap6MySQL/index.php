<html>

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <link rel="stylesheet" href="style.css">
    <title>Untitle</title>
</head>

<body>
    <?php
    require_once("db_module.php");
    $link = null;
    taoKetNoi($link);
    ?>
    <div id=container>
        <div id="banner"></div>
        <div id="menu"><a href="./">Home </a> </div>
    </div>
    <div id="lmenu">
        <ul>
            <?php include_once("menu.php"); ?>
        </ul>
    </div>
    <div id="content">
        <?php include_once("content.php"); ?>
    </div>
 <?php 
 giaiPhongBoNho($link,$result);
 ?>
 <?php 
 $result=chayTruyVanKhongTraVeDL ($link="select*from tbl_danhmuc");
 while ($row=mysqli_fetch_assoc($result)){
     echo "<li><a href='?dm=".$row['id']."'>".$eow['id']."'>".$row['ten']."</a> </li>";
 }
 ?>
</body>

</html>