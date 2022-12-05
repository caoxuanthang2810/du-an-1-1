<?php

function construct()
{
    load_model('index');
}

function indexAction()
{
    $id = $_GET['id'];

    $id_categories = $_GET['id_cate'];
    $pro = get_one_products($id);
    $cate = get_product_by_id_cate($id, $id_categories);
    $data['cate'] = $cate;

    if (isset($_GET['id'])) {

        update_view($id);
    }



    $data["products"] = $pro;

    // $data['pro'] = get_product_by_id_cate($id,$id_categories);

    if ($pro) {
        // $data['cate'] = $id_cate;
        $data['comments'] = get_comments_by_id($id);
        load("helper", "format");
        load_view('index', $data);
    }


    if (isset($_POST["btn_comment"])) {
        header('Location: ?role=client&mod=chi_tiet&id=' . $id . '&id_cate=' . $id_categories);
    }
}


function commentPostAction()
{
    $id_product = $_GET['id'];
    $content = $_POST["content"];
    $id_categories = $_GET['id_cate'];

    create_comment($id_product, $content);
    // $data["products"] = $cate;
    // load_view('index', $data);
    // header('Location: ?role=client&mod=chi_tiet&id=' . $id_product . '&id_cate=' . $id_categories);
}
