<?php

function construct()
{
    load_model('index');
    load('helper','format');
}

function indexAction()
{

    if (isset($_GET['id'])) {
        $id = (int) $_GET['id'];
        $pro = get_products_by_id($id);
        
        $qty = 1;
        if (isset($_SESSION['cart']['buy']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
            $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
        }
        $_SESSION['cart']['buy'][$id] = array(
            'id' => $pro['id'],
            'name' => $pro['name'],
            'img' => $pro['img'],
            'price' => $pro['price'],
            'qty' => $qty,
            'sub_total' => $pro['price'] * $qty
        );
        update_info_cart();
    }
    if (!empty($_SESSION['cart'])) {
        $data['cart'] = $_SESSION['cart'];
        $total = get_total_cart();
        $data['total'] = $total;
        load_view('index', $data);
    }
    if(!is_auth()){
        load_view('index');
    }
    
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
