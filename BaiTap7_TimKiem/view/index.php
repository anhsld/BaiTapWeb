<!DOCTYPE html>
<html>

<head>
    <link href="bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <?php
    include_once("db_module.php");
    $link = NULL;
    taoKetNoi($link);
    ?>
    <div class="containe">
        <div class="row">
            <form class="col-12 form-control">
                <input class="form-input-control" name="keyword" />
                <input type="submit" class="btn btn_success" value="Tìm Kiếm" />
            </form>
        </div>
        <div class="row">
            <?php
            if (isset($_GET['keyword'])) { //chạy tìm kiếm
                $result = chayTruyVanTraVeDL($link, "select * from tbl_products where name_product like '%".$_GET['keyword']."%'");
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo "
                            <div class='col-6 hoverable'>
                                <span class='h3'>" . $rows['name_product'] . "</span>
                                <img 'img' style='height:200px;' src='" . $rows['url_product'] . "'/>
                                <a class='btn btn-info' href='detail.php?sp=" . $rows['id_product'] . "'>Chi tiết</a>
                            </div>
                        ";
                }
            } else { //chạy trang chủ
                $result = chayTruyVanTraVeDL($link, "select * from tbl_products");
                while ($rows = mysqli_fetch_assoc($result)) {
                    echo "
                            <div class='col-6 hoverable'>
                                <span class='h3'>" . $rows['name_product'] . "</span>
                                <img 'img' style='height:200px;' src='" . $rows['url_product'] . "'/>
                                <a class='btn btn-info' href='detail.php?sp=" . $rows['id_product'] . "'>Chi tiết</a>
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