<?php

// function get_bills_by_id($id){
//     $result = db_fetch_array("SELECT b.time,b.price,p.img,p.name,d.quantily, s.name as name_status FROM `bills` b
//     INNER JOIN `bill_detail` d on d.code = b.code
//     INNER JOIN `products` p on p.id = d.id_product
//     INNER JOIN `status` s on s.id = b.status
//     WHERE id_user = $id AND ");
//     return $result;
// }

function get_bills_by_id($id){
    $result = db_fetch_array("SELECT b.code,b.time,b.price,b.id_user,s.name as name_status FROM `bills` b
    INNER JOIN `status` s on s.id = b.`status`
    WHERE b.id_user = $id");
    return $result;
}


?>