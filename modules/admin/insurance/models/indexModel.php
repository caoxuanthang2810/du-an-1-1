<?php
// function get_list_categories() {
//     $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
//     return $result;
// }

function get_list_insurance() {
    $result = db_fetch_array("SELECT * FROM `insurance`");
    return $result;
}

// function get_one_category($id) {
//     $result = db_fetch_row("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id WHERE c.id = $id");
//     return $result;
// }

function get_one_insurance($id) {
    $result = db_fetch_row("SELECT*FROM `insurance`WHERE id = $id");
    return $result;
}

function create_insurance($name) {
    // $user = get_auth();
    $id = db_insert('insurance', [
        'name_insurance' => $name,
       
        // 'create_id' => $user['id'],
        // 'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_insurance($id, $name) {
    db_update('insurance', [
        'name_insurance' => $name,
    ], "id = $id");
    return true;
}

function delete_insurance($id) {
    db_delete('insurance', "id = $id");
    return true;
}