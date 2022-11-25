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

function billPostAction(){
    $id_product = $_GET['id'];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];

    create_bills($id_product,$fullname,$email,$phone,$address);

    header('Location: ?role=client&mod=hoa_don&id='.$id_product);


}

// function commentPostAction() {
//     $id_product = $_GET['id'];
//     $content = $_POST["content"];
    
//     create_comment($id_product,$content);
//     // $data["products"] = $cate;
//     // load_view('index', $data);
//     header('Location: ?role=client&mod=chi_tiet&id='.$id_product);
// }