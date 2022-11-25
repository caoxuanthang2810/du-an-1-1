<?php

function get_one_bill_products($id)
{
    $result = db_fetch_row("SELECT bi.*,p.*,cate.*,made.* FROM `bills` bi
    INNER JOIN `products` p ON p.id = bi.id_product
    INNER JOIN `made_in` made ON made.id = p.made_in
    INNER JOIN `categories` cate ON cate.id = p.id_categories 
    INNER JOIN `users` u ON u.id = bi.id_user WHERE bi.id_product = $id");
    return $result;
}