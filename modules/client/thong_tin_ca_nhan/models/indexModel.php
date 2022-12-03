<?php


function update_user_by_id($id, $fullname, $password, $email, $phone, $address,) {
    db_update('users', [
       'fullname' => $fullname,
       'password' => $password,
       'email' => $email,
       'phone' => $phone,
       'address' => $address
    ], "id = $id");
    return $id;
}