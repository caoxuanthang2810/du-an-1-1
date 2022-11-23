<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    
    $data['insurance'] = get_list_insurance();// lấy mảng  có danh mục trọng đb
    load_view('index', $data);
}

function createAction() {
    load_view('create');
}

function createPostAction() {
    $name = $_POST['name_insurance'];

    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
        header('Location: ?role=admin&mod=insurance&action=create');
        die();
    }
    create_insurance($name);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=insurance');
}

function deleteAction() {
    $id = $_GET['id'];
    delete_insurance($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=insurance');
}


function updateAction()
{
    $id = $_GET['id'];
    $cate= get_one_insurance($id);
    $data['insurance'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=insurance');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $cate = get_one_insurance($id);
    if (!$cate) {
        header('Location: ?role=admin&mod=insurance');
        die();
    }
    $name = $_POST['name_insurance'];
    
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=insurance&action=update&id_cate='.$id);
    }
    update_insurance($id, $name);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=insurance');
}