<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $id = $_GET['id'];
    $cate = get_one_products($id);
    $data["products"] = $cate;
    foreach($data as $key){
        // extract($data)
        $id_cate = $key["id_categories"];
        $data['categories'] = get_categories_by_id($id_cate);
    }
    load_view('index', $data);
}


// function commentAction() {
//     $id = $_GET['id'];
//     $cate = get_one_products($id);
//     $data["products"] = $cate;
//     load_view('index', $data);
// }