<?php

function construct() {
    // request_auth();
    load_model('index');
}

function indexAction() {
    
    $data['made_in'] = get_list_madein();// lấy mảng  có danh mục trọng đb
    load_view('index', $data);
}

function createAction() {
    load_view('create');
}

function createPostAction() {
    $name = $_POST['name_made_in'];
    
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
        header('Location: ?role=admin&mod=made_in&action=create');
        die();
    }
    create_madein($name);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=made_in');
}

function deleteAction() {
    $id = $_GET['id'];
    delete_madein($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=made_in');
}

function updateAction()
{
    $id = $_GET['id'];
    $cate = get_one_madein($id);
    $data['made_in'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=made_in');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $cate = get_one_madein($id);
    if (!$cate) {
        header('Location: ?role=admin&mod=made_in');
        die();
    }
    $name = $_POST['name_made_in'];
    
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=made_in&action=update&id='.$id);
    }
    update_madein($id, $name);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=made_in');
}