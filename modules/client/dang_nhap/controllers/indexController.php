<?php

function construct() {
    load_model('index');
}

function indexAction() {
    request_auth(false);
    load_view('index');
}

function indexPostAction() {
    request_auth(false);
    // validation
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($email) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: ?role=client&mod=dang_nhap');
    }
    // xử lý đăng nhập
    // $auth = get_auth_user($username, $password);

    $auth = get_login($email, $password);

    if ($auth) {
        push_auth($auth);
        header('Location: ?role=client');
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: ?role=client&mod=dang_nhap');
    }
}

function logout(){
    request_auth(true);
}