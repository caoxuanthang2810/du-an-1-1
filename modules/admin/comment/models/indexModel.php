<?php
// function get_list_categories() {
//     $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
//     return $result;
// }

function get_list_comment($index) {
    $result = db_fetch_array("SELECT c.*, u.fullname FROM `comments` c 
    INNER JOIN `users` u ON u.id = c.id_user LIMIT $index,7");
    return $result;
}


function delete_comment($id) {
    db_delete('comments', "id = $id");
    return true;
}