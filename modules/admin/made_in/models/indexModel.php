<?php
// function get_list_categories() {
//     $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
//     return $result;
// }

function get_list_madein() {
    $result = db_fetch_array("SELECT * FROM `made_in`");
    return $result;
}

function get_one_madein($id) {
    $result = db_fetch_row("SELECT*FROM `made_in`WHERE id = $id");
    return $result;
}

function create_madein($name) {
    // $user = get_auth();
    $id = db_insert('made_in', [
        'name_made_in' => $name,
       
        // 'create_id' => $user['id'],
        // 'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_madein($id, $name) {
    db_update('made_in', [
        'name_made_in' => $name,
       
    ], "id = $id");
    return true;
}

function delete_madein($id) {
    db_delete('made_in', "id = $id");
    return true;
}