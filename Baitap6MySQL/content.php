<?php 
if (isset($_GET['dm']))
$result = chayTruyVanKhongTraVeDL($link="select *from tbl_sanpham where id_dm=".$_GET['dm']);
else 
$result = chayTruyVanKhongTraVeDL ($link="select *from tbl_sanpham");
while($rows=mysqli_fetch_assoc($result)){
    echo "<a href='chitiet.php?sp=".$row['id']."'> <div class='sp'>
    <h2>".$rows['ten']."</h2> 
    <p>Mo ta:".$rows['mota']."</p>
    <p>Gia:".$rows['gia']."</p>  
    </div></a> ";
}
Require_once("db_module.php")
link=null
Taoketnoi(link)
?>
