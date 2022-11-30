<?php

function construct() {
    load_model('index');
}

function indexAction() {
    load_view('index');
}

function indexPostAction() {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $id_role = 2;


    
    if (empty($username)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
        header('Location: ?role=client&mod=dang_ky');
        die();
    }
    // create_users_login($username,$password,$email,$id_role = 2);

    create_users_login($username,$password,$email, $phone, $address, $id_role = 2);

    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: ?role=client&mod=dang_nhap');
}