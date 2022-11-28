<?php
function get_list_products() {
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}



function get_one_category($id) {
    $result = db_fetch_array("SELECT p.id, p.name, p.price, p.img FROM `products` p 
    INNER JOIN `categories` c ON c.id = p.id_categories  WHERE c.id = $id");
    return $result;
}