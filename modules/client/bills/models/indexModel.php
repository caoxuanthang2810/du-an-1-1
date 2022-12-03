<?php

function get_products_by_id($id){
    $result = db_fetch_row("SELECT * FROM products WHERE id = $id;");
    return $result;
}

function get_total_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['infor']['total'];
    }
    return false;
}
function update_info_cart(){
    $num_order=0;
    $total=0;
    foreach($_SESSION['cart']['buy'] as $item){
       $num_order+=$item['qty'];
       $total+=$item['sub_total'];
    }
    $_SESSION['cart']['infor']=array(
       'num_order'=>$num_order,
       'total'=>$total,
    );
}
function create_bills( $time, $id_user, $status, $price,$code ) {
    
    $id = db_insert('bills', [
        
        'time' => $time,
        'id_user' => $id_user,
        'status' => $status,
        'price' => $price,
        'code' => $code
    ]);
    return $id;
}

function create_bills_detail($id_product,$code,$quantily){
    $id= db_insert('bill_detail',[

        'id_product' => $id_product,
        'code' => $code,
        'quantily' => $quantily

    ]);
    return $id;
}
function update_cart($qty){
    foreach($qty as $id=>$new_qty){
       $qty=$_SESSION['cart']['buy'][$id]['qty']=$new_qty;
       $_SESSION['cart']['buy'][$id]['sub_total']=$new_qty*$_SESSION['cart']['buy'][$id]['price'];
    }
    update_info_cart();
}
?>