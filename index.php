<?php
    session_start();
    ob_start();


include "View/global.php";
include "model/pdo.php";
include "model/product.php";
include "model/news.php";
$product_hot = get_product_hot(4);
$product_new = get_product_new(4);
$product_view = get_product_view(4);


if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


// $product_sale = get_product_sale(4);
include "View/header.php";
if (!isset($_GET['pg'])) {
    include "View/home.php";                                                
}
else {
    switch ($_GET['pg']) {

        case 'product':
            //search
                $kyw="";
                $titlepage="";
            if (isset($_POST["timkiem"])&&($_POST["timkiem"])) {
                $kyw=$_POST["kyw"];
                $titlepage="Kết quả tìm kiếm với từ khóa: ".$kyw;
            }
            $dssp = get_product_all($kyw,12);
            $dsdm = get_category_name();
            $dsbrand =  get_brand_name();
            include "View/shop.php";
            break;
        case 'blog':
            $ds_news_hot = get_news_highligh(2);
            $ds_news_lasest = get_news_all(3);
            include "View/blog.php";
            break;
        case 'newsdetail':
            if (isset($_GET['idnews'])) {
                $id = $_GET['idnews'];
                $blog_detail =get_news_by_id($id);
                include "View/blog_detail.php";
            } else {
                include "View/home.php";
            }
            break;
        case 'detail':
            $dsdm = get_category_name();
            if (isset($_GET['idpro'])) {
                $id = $_GET['idpro'];
                $product_detail =get_product_by_id($id);
                $iddm = $product_detail['id_category'];
                $product_relate =get_product_relate($iddm,$id,4);
                include "View/detail.php";
            } else {
                include "View/home.php";
            }
            break;
        case 'about':
          
            include "View/about.php";
            break;

        
            default:
        include "View/home.php";
            break;
    }
}

include "View/footer.php";

?>