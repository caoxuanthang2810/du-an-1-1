<?php
function get_list_products()
{
    $result = db_fetch_array("SELECT p.id, p.name, p.price, p.quantily, p.img, p.description, i.name_insurance, m.name_made_in, c.name_cate, c.id FROM `products` p 
    INNER JOIN `insurance` i ON i.id = p.insurance 
    INNER JOIN `made_in` m ON m.id = p.made_in
    INNER JOIN `categories` c ON c.id = p.id_categories");
    return $result;
}

function get_one_products($id)
{
    $result = db_fetch_row("SELECT * FROM `products` WHERE id = $id");
    return $result;
}
function get_list_categories() {
    $result = db_fetch_array("SELECT * FROM `categories` ");
    return $result;
}
function get_list_madein() {
    $result = db_fetch_array("SELECT * FROM `made_in`");
    return $result;
}
function get_list_insurance() {
    $result = db_fetch_array("SELECT * FROM `insurance`");
    return $result;
}

function create_products($name, $price,$description,$quantily, $image, $insurance, $made_in, $id_categories) {
    // $user = get_auth();
    $id = db_insert('products', [
        'name' => $name,
        'price' => $price,
        'quantily' => $quantily,
        'img' => $image,
        'description' => $description,
        'insurance' => $insurance,
        'made_in' => $made_in,
        'id_categories' => $id_categories,
    ]);
    get_img();
    return $id;
}

function update_products($id, $name, $price,$quantily, $image,$description, $insurance, $made_in, $id_categories) {
    db_update('products', [
        'name' => $name,
        'price' => $price,
        'quantily' => $quantily,
        'img' => $image,
        'description' => $description,
        'insurance' => $insurance,
        'made_in' => $made_in,
        'id_categories' => $id_categories,
    ], "id = $id");
     get_img();
    return true;
}

function delete_products($id) {
    db_delete('products', "id = $id");
    return true;
}

function  get_img()
{

    if (isset($_FILES['img'])) {

        $error = [];

        $target_dir = './public/images/container/';
        $image = $_FILES['img']['name'];
        $target_file = $target_dir . $image;
        $allowUpload = true;
        $allowtype = ['jpg', 'png', 'jpeg', 'gif'];
        $maxfilesize = 2000000;

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (!in_array($imageFileType, $allowtype)) { // in_a
            $error['img_type'] = "File không được định dạng";
            $allowUpload = false;
        }

        if ($_FILES['img']['size'] > $maxfilesize) {
            echo " File không vượt quá " . $maxfilesize . "(Bytes)";
            $allowUpload = false;
        }
        // up loadfile
        if ($allowUpload == true) {
            move_uploaded_file($_FILES['img']['tmp_name'], $target_file);

            // move_uploaded_file($image['tmp_name'], "./public/images/container/" . $image['name']);

        }
    }
}
