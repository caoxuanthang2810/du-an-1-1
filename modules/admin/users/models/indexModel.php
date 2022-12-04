<?php

function get_list_users($index) {
    $result = db_fetch_array("SELECT u.*,r.name_role FROM `users` u INNER JOIN `role` r ON u.id_role = r.id_role LIMIT $index,5");
    return $result;
}

function get_one_users($id) {
    $result = db_fetch_row("SELECT u.*,r.name_role FROM `users` u INNER JOIN `role` r ON u.id_role = r.id_role WHERE `id` = $id");
    return $result;
}
function get_list_role() {
    $result = db_fetch_array("SELECT * FROM `role`");
    return $result;
}
function update_users($id, $fullname,$password,$email,$phone,$address,$id_role, $image) {
    db_update('users', [
        'fullname' => $fullname,
        'password' => $password,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'id_role' => $id_role,
        'img' => $image,
    ], "id = $id");
    get_img();
    return true;
}
function  get_img()
{

    if (isset($_FILES['img'])) {

        

        $target_dir = './public/images/user/';
        $image = $_FILES['img']['name'];
        $target_file = $target_dir . $image;
        $allowUpload = true;
       
        if ($allowUpload == true) {
            move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

            // move_uploaded_file($image['tmp_name'], "./public/images/container/" . $image['name']);

        }
    }
}
function delete_users($id) {
    db_delete('users', "id = $id");
    return true;
}

