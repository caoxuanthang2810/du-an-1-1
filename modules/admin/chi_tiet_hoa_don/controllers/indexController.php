<?php

function construct()
{
    load_model('index');
    load('helper','format');
}

function indexAction()
{
    $code = $_GET['code'];
    
    $data['bills'] = get_bills_by_id($code);
    // show_array($data);
    // die;

    load_view('index',$data);
    
}

function indexPostAction(){
    $code = $_GET['code'];
    updatastatus($code);
    header('location: ?role=client&mod=hoa_don');

    
}

