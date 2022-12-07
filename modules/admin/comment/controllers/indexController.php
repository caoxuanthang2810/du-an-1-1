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
    $data['comment'] = get_list_comment($index);// lấy mảng  có danh mục trọng đb
    load_view('index', $data);
}

function deleteAction() {
    $id = $_GET['id'];
    delete_comment($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=comment');
}

// function createAction() {
    //     load_view('create');
// }

// function createPostAction() {
//     $name = $_POST['name'];
//     $description = $_POST['description'];
//     if (empty($name)) {
//         push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
//         header('Location: ?role=admin&mod=category&action=create');
//         die();
//     }
//     create_category($name, $description);
//     push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
//     header('Location: ?role=admin&mod=category');
// }


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