<?php
    session_start();
    ob_start();
    // session_unset();


include "View/global.php";
include "model/pdo.php";
include "model/product.php";
include "model/news.php";
include "model/user.php";
$product_hot = get_product_hot(4);
$product_new = get_product_new(4);
$product_view = get_product_view(4);

if(!isset($_SESSION['s_user'])) {
    $_SESSION['s_user'] = [];
}

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
if(!isset($_SESSION['voucherSalePercent'])) {
    $_SESSION['voucherSalePercent'] = [
        'sale' => 0,
    ];
}

if(!isset($_SESSION['promodeCode'])) {
   $_SESSION['promodeCode'] = NULL;
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

        

        case 'cart':
            include "View/cart.php";
            break;

        case 'checkout' :
            include "View/checkout.php";
            break;
        case 'checkoutDone' :
            include "View/orderdone.php";
            break;
        case 'dangnhap' :
            if (isset($_POST['login'])&&($_POST['login'])) {
                
                $email=$_POST['email'];
                $password=$_POST['password'];
                //kiemtra
                $checkuser = checkuser($email,$password);
                // echo var_dump($checkuser);
                if (is_array($checkuser) && (count($checkuser))){
                    $_SESSION['s_user'] = $checkuser;
                    header('location:index.php?pg');
                    echo 'đúng';
                }else {
                    $tb = "Tài khoản không tồn tại"; 
                    
                    $_SESSION['tb_dangnhap']=$tb;
                    header('location: index.php?pg=signin');
                }

                //ouitput
            }

            break;
        case 'signin':
            include "View/signin.php";
        break;
        case 'adduser':
            if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['ForgotPassword'];
                echo var_dump($username,$email,$password);
                //xử lí
                user_insert($username, $password, $email);
                
            }
            include "View/signin.php";
            
            break;
        case 'signup':
            include_once "View/signup.php";
        break;
        case 'logout':
            if (isset($_SESSION['s_user']) && count($_SESSION['s_user'])>0){
                $_SESSION['s_user'] = [];
            };
            header('location:index.php?pg');
            break;
        case 'account':
            if (isset($_SESSION['s_user']) && count($_SESSION['s_user'])>0){
                include "View/account.php";
            };
            break;
        case 'updateUser':
            if (isset($_POST['updateAccount'])&&($_POST['updateAccount'])){
            $fullname=$_POST["fullname"];
            $phone=$_POST["phone"];
            $address=$_POST["address"];
            $password=$_POST["updatepassword"];
            $id=$_POST["id"];
            $role=0;
            acount_update($fullname,$phone,$address,$password,$role,$id);
            include "View/account_confirm.php";
        }
        break;
            default:
        include "View/home.php";
            break;
    }
}

include "View/footer.php";

?>