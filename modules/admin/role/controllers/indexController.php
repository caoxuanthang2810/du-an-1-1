<?php

function construct() {
    // // request_auth();
    load_model('index');
}

function indexAction() {
    
    $data['role'] = get_list_role();// lấy mảng  có danh mục trọng đb
    load_view('index', $data);
}

function createAction() {
    load_view('create');
}

function createPostAction() {
    $name = $_POST['name_role'];
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
        header('Location: ?role=admin&mod=role&action=create');
        die();
    }
    create_role($name);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=role');
}

function deleteAction() {
    $id = $_GET['id'];
    delete_role($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=role');
}

function updateAction()
{
    $id = $_GET['id'];
    $cate = get_one_role($id);
    $data['role'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=role');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $cate = get_one_role($id);
    if (!$cate) {
        header('Location: ?role=admin&mod=role');
        die();
    }
    $name = $_POST['name_role'];
    
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=role&action=update&id='.$id);
    }
    update_role($id, $name);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=role');
}