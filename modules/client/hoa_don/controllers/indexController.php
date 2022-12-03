<?php

function construct()
{
    load_model('index');
    load('helper','format');
}

function indexAction()
{

    load_view('index');
    
}
function indexPostAction(){
    $id_user = get_auth()['id'];
    $code = RAND(0, 99);
    $status = 1;
    $price = $_SESSION['cart']['infor']['total'];
    $time = date('Y-m-d H:i:s');


    $actived = create_bills($time,$id_user,$status,$price,$code);
    if ($actived) {
        foreach ($_SESSION['cart']['buy'] as $vaule) {
            $id_product = $vaule['id'];
            $quantily = $vaule['qty'];

            create_bills_detail($id_product, $code, $quantily);
        }

        unset($_SESSION['cart']['buy']);
        header('Location: ?role=client&mod=bills');
}
}
function deleteAction()
{
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        if (!empty($id)) {
            unset($_SESSION['cart']['buy'][$id]);
            update_info_cart();
        }
    }
    header('Location:?role=client&mod=gio_hang');
}
