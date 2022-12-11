<?php

function construct() {
    load_model('index');
}

// function indexAction() {
//     load_view('index');
// }


function searchPostAction() {
    $name = $_POST['tim_kiem'];
    $data['products'] = get_search_product($name);
    load_view('index', $data);
}