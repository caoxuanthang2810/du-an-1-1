<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $id = $_GET['id'];
    $id_categories = $_GET['id_cate'];
    $pro= get_one_products($id);
    $cate=get_product_by_id_cate($id,$id_categories);
    $data['cate'] = $cate;
    
    
    $data["products"] = $pro;
    
    // $data['pro'] = get_product_by_id_cate($id,$id_categories);
    
    if ($pro) {
        // $data['cate'] = $id_cate;
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