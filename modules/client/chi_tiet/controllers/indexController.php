<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $id = $_GET['id'];
    $cate= get_one_products($id);
    $data["products"] = $cate;
    if ($cate) {
        $data['comments'] = get_comments_by_id($id);
        load("helper","format");
        load_view('index', $data);
    }
    //  else {
    //     header('Location: ?role=admin&mod=users');
    // }

    // $cate= get_comments_by_id($id);
    // $data["comments"] = $cate;
    
    // load_view('index', $data);
}


function commentPostAction() {
    $id_product = $_GET['id'];
    $content = $_POST["content"];
    
    create_comment($id_product,$content);
    // $data["products"] = $cate;
    // load_view('index', $data);
    header('Location: ?role=client&mod=chi_tiet&id='.$id_product);
}