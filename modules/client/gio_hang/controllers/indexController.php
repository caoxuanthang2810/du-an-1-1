<?php

function construct() {
    load_model('index');
}

function indexAction() {
    load_view('index');
    if(isset($_GET['id'])){
        $id =(int) $_GET['id'];
        $pro = get_products_by_id($id);
        show_array($pro);
        
    }
}