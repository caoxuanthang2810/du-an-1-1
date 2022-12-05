<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    
    $data['bills'] = get_list_bills();// lấy mảng  có danh mục trọng đb
    load_view('index', $data);
}

function updateAction()
{
    $id = $_GET['id'];
    $cate = get_one_bills($id);
    $data['bills'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=bills');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $cate = get_one_bills($id);
    if (!$cate) {
        header('Location: ?role=admin&mod=bills');
        die();
    }
    $name = $_POST['name_role'];
    
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=bills&action=update&id='.$id);
    }
    update_role($id, $name);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=bills');
}