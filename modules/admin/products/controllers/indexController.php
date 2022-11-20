<?php

function construct() {
    
    load_model('index');
}

function indexAction() {
    $list_product = get_list_products();
    $data['products'] = $list_product;
    load_view('index', $data);
}

// function createAction() {
//     $data['products'] = get_list_products();
//     load_view('create', $data);
// }

// function createPostAction() {
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     if (empty($name)) {
//         push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
//         header('Location: ?role=admin&mod=product&action=create');
//         die();
//     }
//     create_product($name, $description);
//     push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
//     header('Location: ?role=admin&mod=product');
// }

function deleteAction() {
    $id = $_GET['id'];
    delete_product($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=products');
}

// function updateAction()
// {
//     $id = $_GET['id_cate'];
//     $cate = get_one_category($id);
//     $data['category'] = $cate;
//     if ($cate) {
//         load_view('update', $data);
//     } else {
//         header('Location: ?role=admin&mod=category');
//     }
// }

// function updatePostAction() {
//     $id = $_GET['id_cate'];
//     $cate = get_one_category($id);
//     if (!$cate) {
//         header('Location: ?role=admin&mod=category');
//         die();
//     }
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     if (empty($name)) {
//         push_notification('errors', [
//             'name' => 'Vui lòng nhập vào tên danh mục'
//         ]);
//         header('Location: ?role=admin&mod=category&action=update&id_cate='.$id);
//     }
//     update_category($id, $name, $description);
//     push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
//     header('Location: ?role=admin&mod=category');
// }