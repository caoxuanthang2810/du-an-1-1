<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $id = get_auth()['id'];
    $data['user'] = get_user_by_id($id);
    load_view('index', $data);
}

function indexPostAction() {
    $id = get_auth()['id'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    update_user_by_id($id, $fullname, $password, $email, $phone, $address);
    header('location:?role=client&mod=thong_tin_ca_nhan');

}