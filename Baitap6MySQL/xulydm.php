<?php
require_once("db_module.php");
if(isset($_POST['tendm'])){
    $link=null;
    taoketnoi($link);
    $result = chayTruyVanKhongTraVeDL (" insert into tbl_danhmuc values (null,'".$_POST['tendm']."')");
    giaiPhongBoNho (null,null);
    if ($result)
    
        header("Location: themdm.php?msg=done");
        else
        header("Location: themdm.php?msg=error");
    } else
    header("Location: themdm.php");

?>