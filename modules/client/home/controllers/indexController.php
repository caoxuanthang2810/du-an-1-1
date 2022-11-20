<?php

function construct() {
    
    load_model('index');
}

function indexAction() {
    $list_product = get_list_products();
    $data['products'] = $list_product;
    load_view('index', $data);
}


?>