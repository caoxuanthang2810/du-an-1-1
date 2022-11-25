<?php

function get_list_products()
{
    $result = db_fetch_array("SELECT p.id, p.name, p.price, p.quantily, p.img, p.description, i.name_insurance, m.name_made_in, c.name_cate FROM `products` p 
    INNER JOIN `insurance` i ON i.id = p.insurance 
    INNER JOIN `made_in` m ON m.id = p.made_in
    INNER JOIN `categories` c ON c.id = p.id_categories");
    return $result;
}

function get_one_products($id)
{
    $result = db_fetch_row("SELECT p.id, p.name, p.price, p.quantily, p.img, p.description, i.name_insurance, m.name_made_in, c.name_cate FROM `products` p 
    INNER JOIN `insurance` i ON i.id = p.insurance 
    INNER JOIN `made_in` m ON m.id = p.made_in
    INNER JOIN `categories` c ON c.id = p.id_categories WHERE p.id = $id");
    return $result;
}

function create_bills($id_product,$fullname,$email,$phone,$address) {
    $user = get_auth();
    $id = db_insert('bills', [
        'fullname' => $fullname,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'time' => date('Y-m-d H:i:s'),
        'id_product' => $id_product,
        'id_user' => $user["id"]
    ]);
    return $id;
}
