<?php

function construct() {
    // // request_auth();
    load_model('index');
}

function indexAction() {
    
    $data['users'] = get_list_users();// lấy mảng  có danh mục trọng đb
    load_view('index', $data);
}

// function createAction() {
//     load_view('create');
// }

// function createPostAction() {
//     $name = $_POST['name_made_in'];
    
//     if (empty($name)) {
//         push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
//         header('Location: ?role=admin&mod=made_in&action=create');
//         die();
//     }
//     create_madein($name);
//     push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
//     header('Location: ?role=admin&mod=made_in');
// }

function deleteAction() {
    $id = $_GET['id'];
    delete_users($id);
    push_notification('success', ['Xoá thành viên thành công']);
    header('Location: ?role=admin&mod=users');
}

function updateAction()
{
    $id = $_GET['id'];
    $user = get_user_by_id($id);
    $data['users'] = $user;
    if ($user) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=users');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $user = get_user_by_id($id);
    if (!$user) {
        header('Location: ?role=admin&mod=users');
        die();
    }
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id_role = $_POST['id_role'];
    
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên thành viên'
        ]);
        header('Location: ?role=admin&mod=users&action=update&id='.$id);
    }
    update_users($id, $name, $password,$email, $phone, $address, $id_role);
    push_notification('success', ['Chỉnh sửa thành viên thành công']);
    header('Location: ?role=admin&mod=users');
}