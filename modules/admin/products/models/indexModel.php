<?php
function get_list_products()
{
    $result = db_fetch_array("SELECT p.id, p.name, p.price, p.quantily, p.image,i.id, i.name_insurance, m.id, m.name_made_in, c.id, c.name_cate FROM `products` p 
    INNER JOIN `insurance` i ON i.id = p.insurance 
    INNER JOIN `made_in` m ON m.id = p.made_in
    INNER JOIN `categories` c ON c.id = p.id_categories");
    return $result;
}

function get_one_products($id)
{
    $result = db_fetch_row("SELECT * FROM `products` WHERE c.id = $id");
    return $result;
}

// function create_production($name, $description) {
//     $user = get_auth();
//     $id = db_insert('products', [
//         'name' => $name,
//         'description' => $description,
//         'create_id' => $user['id'],
//         'created_at' => date('Y-m-d H:i:s')
//     ]);
//     return $id;
// }

function update_production($id, $name, $price,$quantity, $image, $insurance, $made_in, $id_categories) {
    db_update('products', [
        'name' => $name,
        'price' => $price,
        'quantily' => $quantity,
        'image' => $image,
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

// function get_list_categories() {
//     $result = db_fetch_array("SELECT * FROM `categories`");
//     return $result;
// }
function  get_img()
{

    if (isset($_FILES['image'])) {

        $error = [];

        $target_dir = '../public/images/container/';
        $image = $_FILES['image']['name'];
        $target_file = $target_dir . $image;
        $allowUpload = true;
        $allowtype = ['jpg', 'png', 'jpeg', 'gif'];
        $maxfilesize = 2000000;

        $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
        if (!in_array($imageFileType, $allowtype)) { // in_a
            $error['img_type'] = "File không được định dạng";
            $allowUpload = false;
        }

        if ($_FILES['image']['size'] > $maxfilesize) {
            echo " File không vượt quá " . $maxfilesize . "(Bytes)";
            $allowUpload = false;
        }
        // up loadfile
        if ($allowUpload == true) {
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        }
    }
}
