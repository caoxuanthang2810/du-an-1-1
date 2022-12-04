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
    $img = $_FILES['img'];
    
    if (isset($_FILES['img'])) {

        $error = [];

        $target_dir = './public/images/user/';
        $image = $_FILES['img']['name'];
        $target_file = $target_dir . $image;
        $allowUpload = true;
        $allowtype = ['jpg', 'png', 'jpeg', 'gif','jfif'];
        $maxfilesize = 2000000;

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (!in_array($imageFileType, $allowtype)) { // in_a
            $error['img_type'] = "File không được định dạng";
            $allowUpload = false;
        }

        if ($_FILES['img']['size'] > $maxfilesize) {
            echo " File không vượt quá " . $maxfilesize . "(Bytes)";
            $allowUpload = false;
        }
        // up loadfile
        if ($allowUpload == true) {
            move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

            // move_uploaded_file($image['tmp_name'], "./public/images/container/" . $image['name']);
        }
    }
    update_user_by_id($id, $fullname, $password, $email, $phone, $address, $img);
    header('location:?role=client&mod=thong_tin_ca_nhan');

}