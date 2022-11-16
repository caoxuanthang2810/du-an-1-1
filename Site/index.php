<?php
    require_once "../Dao/pdo.php";

    if(isset($_GET["dang-nhap"])){
        $VIEW_NAME = "dang-nhap.php";
        $TITLE_NAME = "Trang đăng nhập";
    }else if(isset($_GET["dang-ky"])){
        $VIEW_NAME = "dang-ky.php";
        $TITLE_NAME = "Trang dăng ký";
    }else if(isset($_GET["gio-hang"])){
        $VIEW_NAME = "gio-hang.php";
        $TITLE_NAME = "Trang giỏ hàng";
    }else if(isset($_GET["danh-muc"])){
        $VIEW_NAME = "danh-muc.php";
        $TITLE_NAME = "Trang danh mục sản phẩm";
    }else if(isset($_GET["gioi-thieu"])){
        $VIEW_NAME = "gioi-thieu.php";
        $TITLE_NAME = "Trang giới thiệu";
    }elseif(isset($_GET['chi-tiet-sp'])){
        $VIEW_NAME = "chi-tiet-sp.php";
        $TITLE_NAME = "Trang chi tiết sản phẩm";
    }elseif(isset($_GET['thong-tin-ca-nhan-input'])){
        $VIEW_NAME = "thong-tin-ca-nhan-input.php";
        $TITLE_NAME = "Trang thông tin cá nhân";
    }elseif(isset($_GET['thong-tin-ca-nhan-output'])){
        $VIEW_NAME = "thong-tin-ca-nhan-output.php";
        $TITLE_NAME = "Trang thông tin cá nhân";
    }elseif(isset($_GET['thanh-toan'])){
        $VIEW_NAME = "thanh-toan.php";
        $TITLE_NAME = "Trang thanh toán";
    }
    else{
        $VIEW_NAME = "trang-chu.php";
        $TITLE_NAME = "Trang chủ";
    }

    include_once "./layout.php";
?>