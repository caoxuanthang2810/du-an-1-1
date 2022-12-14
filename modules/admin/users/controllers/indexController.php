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

    $index = ($Current_page - 1) * 7;
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
    
    $id_role= $_POST['id_role'];

    
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=users&action=update&id='.$id);
    }
    update_users($id,$id_role);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=users');
}