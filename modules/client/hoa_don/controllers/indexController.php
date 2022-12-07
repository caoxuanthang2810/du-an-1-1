<?php

function construct()
{
    load_model('index');
    load('helper','format');
}

function indexAction()
{
    if(is_auth()){
        $id = get_auth()['id'];
    }else{
        $id = 1;
    }
    
    $data['bills'] = get_bills_by_id($id);
    // show_array($data);
    // die;

    load_view('index',$data);
    
}

