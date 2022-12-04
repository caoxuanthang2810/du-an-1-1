<?php
function get_user_by_id($id) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE id = '$id'");
    return $result;
}

function update_user_by_id($id, $fullname, $password, $email, $phone, $address, $img){
    db_update('users', [
        'fullname' => $fullname,
        'password' => $password,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'img' => $img
    ], "id = $id");
    get_img();
    return true;
}

function  get_img()
{

    if (isset($_FILES['img'])) {

        $error = [];

        $target_dir = './public/images/user/';
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
}