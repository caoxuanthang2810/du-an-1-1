<?php

function get_list_users() {
    $result = db_fetch_array("SELECT u.*,r.name_role FROM `users` u INNER JOIN `role` r ON u.id_role = r.id_role");
    return $result;
}

function get_one_users($id) {
    $result = db_fetch_row("SELECT u.*,r.name_role FROM `users` u INNER JOIN `role` r ON u.id_role = r.id_role WHERE `id` = $id");
    return $result;
}

function create_users_login($username,$password,$email,$id_role = 2) {
    // $user = get_auth();
    $id = db_insert('users', [
        'username' => $username,
        'password' => $password,
        'email' => $email,
        'id_role' => $id_role
    ]);
    return $id;
}
