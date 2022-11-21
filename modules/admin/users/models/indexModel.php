<?php

function get_list_users() {
    $result = db_fetch_array("SELECT u.id, u.username, u.password, u.email, u.phone, u.address, r.id, r.name FROM `users` u
    INNER JOIN `role` r ON r.id = u.id_role");
    return $result;
}

function get_user_by_id($id) {
    $item = db_fetch_row("SELECT * FROM `users` WHERE `id` = {$id}");
    return $item;
}


function update_users($id, $name, $password, $email, $phone, $address, $id_role) {
    db_update('users', [
        'username' => $name,
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