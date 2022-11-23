<?php

// function construct() {
//     load_model('index');
// }

// function indexAction() {
//     load_view('index');
// }

function construct() {
    load_model('index');
}

function indexAction() {
    $id = $_GET['id'];
    $cate = get_one_products($id);
    $data["products"] = $cate;
    load_view('index', $data);
}