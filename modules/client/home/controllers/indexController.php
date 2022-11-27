<?php

function construct() {
    
    load_model('index');
}

function indexAction() {
    $list_product = get_list_products();
    $data['products'] = $list_product;
    load_view('index', $data);
}

function cateAction(){
    $id = $_GET['id'];
    $cate = get_one_category($id);
    $data['products'] = $cate;
    load_view('index',$data);
}
?>