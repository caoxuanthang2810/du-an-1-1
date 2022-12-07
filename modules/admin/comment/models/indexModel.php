<?php
// function get_list_categories() {
//     $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
//     return $result;
// }

function get_list_comment($index) {
    $result = db_fetch_array("SELECT * FROM `comments` LIMIT $index,7");
    return $result;
}

function get_one_comment($id) {
    $result = db_fetch_row("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id WHERE c.id = $id");
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

function update_category($id, $name, $description) {
    db_update('categories', [
        'name' => $name,
        'description' => $description
    ], "id = $id");
    return true;
}

function delete_comment($id) {
    db_delete('comments', "id = $id");
    return true;
}