<?php

function get_list_users() {
    $result = db_fetch_array("SELECT u.*,r.name_role FROM `users` u INNER JOIN `role` r ON u.id_role = r.id_role");
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
function update_users($id, $username,$password,$email,$phone,$address,$id_role) {
    db_update('users', [
        'username' => $username,
        'password' => $password,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'id_role' => $id_role,
    ], "id = $id");
    return true;
}

function delete_users($id) {
    db_delete('users', "id = $id");
    return true;
}