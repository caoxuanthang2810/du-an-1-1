<?php

function construct() {
    // // request_auth();
    load_model('index');
}

function indexAction() {
    
    $data['users'] = get_list_users();// lấy mảng  có danh mục trọng đb
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

    
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=users&action=update&id='.$id);
    }
    update_users($id, $username,$password,$email,$phone,$address,$id_role);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=users');
}