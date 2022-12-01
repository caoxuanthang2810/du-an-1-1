<?php

function construct() {
    
    load_model('index');
}

function indexAction() {
    
    $Current_page = 1;

    if(isset($_GET["page"])){
        $Current_page = $_GET["page"];
    }

    $index = ($Current_page - 1) * 7;
    $list_product = get_list_products($index);
    $data['products'] = $list_product;
    load("helper","format");
    load_view('index', $data);
}

function cateAction(){
    $id = $_GET['id'];
    $cate = get_one_category($id);
    $data['products'] = $cate;
    load("helper","format");
    load_view('index',$data);

}
