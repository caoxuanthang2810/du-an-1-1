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


function get_categories_by_id($id_cate)
{
    $result = db_fetch_row("SELECT * FROM `products` WHERE id_categories = $id_cate");
    return $result;
}

function create_comment($id_product,$content) {
    $user = get_auth();
    $id = db_insert('comments', [
        'content' => $content,
        'time' => date('Y-m-d H:i:s'),
        'id_product' => $id_product,
        'id_user' => $user['id'],
    ]);
    return $id;
}

function get_comments_by_id($id)
{
    $result = db_fetch_array("SELECT * FROM comments join users on users.id = comments.id_user WHERE comments.id_product = '$id'");
    return $result;
}
