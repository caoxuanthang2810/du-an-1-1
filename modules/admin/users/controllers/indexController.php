<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
            
    $Current_page = 1;

    if(isset($_GET["page"])){
        $Current_page = $_GET["page"];
    }

    $index = ($Current_page - 1) * 5;
    $data['users'] = get_list_users($index);// lấy mảng  có danh mục trọng đb
    load_view('index', $data);
}

function deleteAction() {
    $id = $_GET['id'];
    delete_users($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=users');
}


function updateAction()
{
    $id = $_GET['id'];
    
    $cate= get_one_users($id);
    $data['users'] = $cate;
    if ($cate) {
        $data['role'] = get_list_role();
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=users');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $cate = get_one_users($id);
    if (!$cate) {
        header('Location: ?role=admin&mod=users');
        die();
    }
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id_role= $_POST['id_role'];
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
    
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=users&action=update&id='.$id);
    }
    update_users($id, $username,$password,$email,$phone,$address,$id_role, $img);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=users');
}