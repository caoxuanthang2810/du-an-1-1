<?php
    require_once "../Dao/pdo.php";

    if(isset($_GET["trang-chu"])){
        $VIEW_NAME = "trang-chu.php";
        $TITLE_NAME = "Trang chủ";
    }
    elseif(isset($_GET["category"])){
        $VIEW_NAME = "category.php";
        $TITLE_NAME = "Trang category";
    }elseif(isset($_GET["product"])){
        $VIEW_NAME="product.php";
        $TITLE_NAME="Trang product";
    }elseif(isset($_GET["made_in"])){
        $VIEW_NAME="made_in.php";
        $TITLE_NAME="Trang xuất sứ";
    }
    elseif(isset($_GET["role"])){
        $VIEW_NAME="role.php";
        $TITLE_NAME="Trang chức vụ";
    }
    elseif(isset($_GET["comment"])){
        $VIEW_NAME="comment.php";
        $TITLE_NAME="Trang Comment";
    }else{
        $VIEW_NAME = "user.php";
        $TITLE_NAME = "Trang quản lý tài khoản";
    }

    include_once "./layout.php";
?>