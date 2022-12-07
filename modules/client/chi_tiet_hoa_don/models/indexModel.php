<?php

function get_bills_by_id($id){
    $result = db_fetch_array("SELECT b.time,p.price as price_pro,b.price as price_bill,p.img,p.name,d.quantily,b.code,b.status, s.name as name_status FROM `bills` b
    INNER JOIN `bill_detail` d on d.code = b.code
    INNER JOIN `products` p on p.id = d.id_product
    INNER JOIN `status` s on s.id = b.status
    WHERE b.code = $id ");
    return $result;
}

// function get_bills_by_id($id){
//     $result = db_fetch_array("SELECT b.code,b.time,b.price,b.id_user,s.name as name_status FROM `bills` b
//     INNER JOIN `status` s on s.id = b.`status`
//     WHERE b.id_user = $id");
//     return $result;
// }


function updatastatus($code){
    db_update('bills',
    [
        'status' => 4
    ],"code = $code");
    return true;
}

?>