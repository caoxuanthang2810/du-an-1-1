<?php

// function construct() {
//     load_model('index');
// }

function indexAction() {
    load_view('index');
}

function construct() {
    load_model('index');
}

// function indexAction() {
//     load_view('index');
// }



function indexAction() {
        $name = $_POST['tim_kiem'];
        // load_model('index');
        $data['pro'] = get_search_product($name);
        load_view('index', $data);
    }
    
// function searchPostAction() {
//     $name = $_POST['tim_kiem'];
//     $data['products'] = get_search_product($name);
//     load_view('index', $data);
// }