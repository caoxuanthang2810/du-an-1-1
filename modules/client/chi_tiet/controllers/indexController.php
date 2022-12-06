<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $id = $_GET['id'];
    $pro = get_one_products($id);

    if (isset($_GET['id'])) {

        update_view($id);
    }



    $data["products"] = $pro;

    if ($pro) {
        $data['comments'] = get_comments_by_id($id);
        load("helper", "format");
        load_view('index', $data);
    }
}


function commentPostAction()
{
    $id_product = $_GET['id'];
    $content = $_POST["content"];

    create_comment($id_product, $content);
    header('Location: ?role=client&mod=chi_tiet&id=' . $id_product);
}
