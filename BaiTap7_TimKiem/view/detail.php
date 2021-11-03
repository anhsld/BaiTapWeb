<!DOCTYPE html>
<html>

<head>
    <link href="bootstrap.min.css" rel="stylesheet"/>
</head>

<body>
    <?php
    include_once("db_module.php");
    $link = NULL;
    taoKetNoi($link);
    ?>
    <div class="containe">
        <div class="row">
            <?php
            if(isset($_GET['sp'])){
                $result = chayTruyVanTraVeDL($link, "select * from tbl_products where id_product = ".$_GET['sp']);
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo "
                            <div class='col-12 hoverable'>
                                <span class='h3'>" . $rows['name_product'] . "</span>
                                <img 'img' style='height:200px;' src='" . $rows['url_product'] . "'/>
                                <p>" . $rows['detail_product'] . "</p>
                            </div>
                        ";
                }
            }
            ?>
        </div>
    </div>
    <?php
    giaiPhongBoNho($link, $result);
    ?>
</body>

</html>