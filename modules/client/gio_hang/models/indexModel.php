<?php
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}
function get_products_by_id($id){
    $result = db_fetch_row("SELECT * FROM products WHERE id = $id;");
    return $result;
}