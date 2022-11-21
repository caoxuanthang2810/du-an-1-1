<?php
// function get_list_categories() {
//     $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
//     return $result;
// }

function get_list_role() {
    $result = db_fetch_array("SELECT * FROM `role`");
    return $result;
}

function get_one_role($id) {
    $result = db_fetch_row("SELECT * FROM `role` WHERE id = $id");
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

function create_role($name) {
    // $user = get_auth();
    $id = db_insert('role', [
        'name_role' => $name,
    ]);
    return $id;
}

// function update_category($id, $name, $description) {
//     db_update('categories', [
//         'name' => $name,
//         'description' => $description
//     ], "id = $id");
//     return true;
// }

// function delete_category($id) {
//     db_delete('categories', "id = $id");
//     return true;
// }

function update_role($id, $name) {
    db_update('role', [
        'name_role' => $name,
    ], "id = $id");
    return true;
}

function delete_role($id) {
    db_delete('role', "id = $id");
    return true;
}