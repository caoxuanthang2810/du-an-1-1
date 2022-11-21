<?php

function construct() {
    
    load_model('index');
}

function indexAction() {
    $list_product = get_list_products();
    $data['products'] = $list_product;
    load_view('index', $data);
}

function createAction() {
    $data['products'] = get_list_products();
    load_view('create', $data);
}

function createPostAction() {

    $image = "";

    $name = $_POST['name'];
    $price =  $_POST['price'];
    $quantily =  $_POST['quantily'];
    $image =  "img";
    $description = $_POST['description'];
    $insurance =  $_POST['insurance'];
    $made_in =  $_POST['made_in'];
    $id_categories =  $_POST['id_categories'];

    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
        header('Location: ?role=admin&mod=products&action=create');
        die();
    }
    create_products($name, $price,$description,$quantily, $image, $insurance, $made_in, $id_categories);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=products');
}

function deleteAction() {
    echo "Ok";
    $id = $_GET['id'];
    
    // push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    delete_products($id);
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