<?php

function get_search_product($name)
{
    $result = db_fetch_array("SELECT * FROM products WHERE name LIKE '%$name%'");
    return $result;
}

