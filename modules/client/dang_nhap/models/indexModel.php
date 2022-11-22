<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}

function get_login($email, $password) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");
    return $result;
}

// function get_auth_user($username, $pass) {
//     $result = db_fetch_row("SELECT * FROM `users` WHERE `email` = '$username' AND `password` = '$pass' AND `role` = 2");
//     return $result;
// }