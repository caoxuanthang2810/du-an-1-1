<?php
// function get_list_categories() {
//     $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
//     return $result;
// }

function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories`");
    return $result;
}

function get_one_category($id) {
    $result = db_fetch_row("SELECT*FROM `categories`WHERE id = $id");
    return $result;
}

function create_category($name) {
    // $user = get_auth();
    $id = db_insert('categories', [
        'name_cate' => $name,
        
        // 'id' => $user['id'],
        // 'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_category($id, $name) {
    db_update('categories', [
        'name_cate' => $name,
      
    ], "id = $id");
    return true;
}

function delete_category($id) {
    db_delete('categories', "id = $id");
    return true;
}