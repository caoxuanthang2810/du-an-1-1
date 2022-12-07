<?php
// function get_list_categories() {
//     $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
//     return $result;
// }

function get_list_bills($index) {
    $result = db_fetch_array("SELECT bi.*,sta.name as name_status, u.fullname FROM `bills` bi
    INNER JOIN `status` sta ON sta.id = bi.status 
    INNER JOIN `users` u ON u.id = bi.id_user LIMIT $index,5");
    return $result;
}

function get_list_status() {
    $result = db_fetch_array("SELECT * FROM `status`");
    return $result;
}


function get_one_bills($id) {
    $result = db_fetch_row("SELECT * FROM `bills` WHERE id = $id");
    return $result;
}

// function create_category($name, $description) {
//     $user = get_auth();
//     $id = db_insert('categories', [
//         'name' => $name,
//         'description' => $description,
//         'create_id' => $user['id'],
//         'created_at' => date('Y-m-d H:i:s')
//     ]);
//     return $id;
// }


function update_role($id,$time, $id_user, $status, $price, $code) {
    // $users = get_auth();
    db_update('bills', [
        'time' => $time,
        'id_user' => $id_user,
        'status' => $status,
        'price' => $price,
        'code' => $code,
    ], "id = $id");
    return true;
}