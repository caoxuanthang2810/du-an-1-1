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
        $data['bills'] = get_bills_by_id($id);
        load_view('index',$data);
    }
    else{
        load_view('index');

    }
    
   // $data['bills'] = get_bills_by_id($id);
    // show_array($data);
    // die;

    //load_view('index',$data);
    
}

