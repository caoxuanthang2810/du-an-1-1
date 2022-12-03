<?php

function construct()
{
    load_model('index');
    load('helper','format');
}

function indexAction()
{
    $id = get_auth()['id'];
    
    
    $data['bills'] = get_bills_by_id($id);

    load_view('index',$data);
    
}

