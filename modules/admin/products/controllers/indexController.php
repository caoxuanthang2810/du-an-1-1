<?php

function construct() {
    // request_auth();
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
    $name = $_POST['name'];
    $price =  $_POST['price'];
    $quantily =  $_POST['quantily'];
    $image =  $_FILES["img"];

    // $image =  get_img($_FILES["image"]);


    // get_img($image);

    $description = $_POST['description'];
    $insurance =  $_POST['insurance'];
    $made_in =  $_POST['made_in'];
    $id_categories =  $_POST['id_categories'];

    if (isset($_FILES['img'])) {

        $error = [];

        $target_dir = './public/images/container/';
        $image = $_FILES['img']['name'];
        $target_file = $target_dir . $image;
        $allowUpload = true;
        $allowtype = ['jpg', 'png', 'jpeg', 'gif'];
        $maxfilesize = 2000000;

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (!in_array($imageFileType, $allowtype)) { // in_a
            $error['img_type'] = "File không được định dạng";
            $allowUpload = false;
        }

        if ($_FILES['img']['size'] > $maxfilesize) {
            echo " File không vượt quá " . $maxfilesize . "(Bytes)";
            $allowUpload = false;
        }
        // up loadfile
        if ($allowUpload == true) {
            move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

            // move_uploaded_file($image['tmp_name'], "./public/images/container/" . $image['name']);
        }
    }

    // move_uploaded_file($image['tmp_name'], "./public/images/container/" . $image['name']);

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

function updateAction()
{
    $id = $_GET['id'];
    $cate = get_one_products($id);
    $data['products'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=products');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $cate = get_one_products($id);
    if (!$cate) {
        header('Location: ?role=admin&mod=products');
        die();
    }
    $name = $_POST['name'];
    $price =  $_POST['price'];
    $quantily =  $_POST['quantily'];
    $image =  $_FILES["img"];

    // $image =  get_img($_FILES["image"]);


    // get_img($image);

    $description = $_POST['description'];
    $insurance =  $_POST['insurance'];
    $made_in =  $_POST['made_in'];
    $id_categories =  $_POST['id_categories'];

    // move_uploaded_file($image['tmp_name'], "../public/images/container/" . $image['name']);

    if (isset($_FILES['img'])) {

        $error = [];

        $target_dir = './public/images/container/';
        $image = $_FILES['img']['name'];
        $target_file = $target_dir . $image;
        $allowUpload = true;
        $allowtype = ['jpg', 'png', 'jpeg', 'gif'];
        $maxfilesize = 2000000;

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (!in_array($imageFileType, $allowtype)) { // in_a
            $error['img_type'] = "File không được định dạng";
            $allowUpload = false;
        }

        if ($_FILES['img']['size'] > $maxfilesize) {
            echo " File không vượt quá " . $maxfilesize . "(Bytes)";
            $allowUpload = false;
        }
        // up loadfile
        if ($allowUpload == true) {
            move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

            // move_uploaded_file($image['tmp_name'], "./public/images/container/" . $image['name']);

        }
    }


    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=category&action=update&id='.$id);
    }
    // update_category($id, $name, $description);
    update_products($id, $name, $price,$quantily, $image,$description, $insurance, $made_in, $id_categories);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=products');
}