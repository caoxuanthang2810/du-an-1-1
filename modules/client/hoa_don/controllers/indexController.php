<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $id = $_GET['id'];
    $cate = get_one_bill_products($id);
    $data["bills"] = $cate;
    load_view('index', $data);
}
