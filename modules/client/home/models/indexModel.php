<?php
function get_list_products() {
    $result = db_fetch_array("SELECT * FROM `products`");
    return $result;
}


//  function  get_img(){
//     if(isset($_POST['btn_insert'])){
//         $name = $_POST["name"];
//         $price = $_POST['price'];
//         $detail = $_POST['detail'];
//         $color = $_POST['color'];
//         $capacity = $_POST['capacity'];
//         $id_categories = $_POST['id_categories'];
//         $bit_active = $_POST['bit_active'];
    
//         if (isset($_FILES['image'])){
        
//             $error = [];
    
//             $target_dir = '../../Asset/img/products/';
//             $image = $_FILES['image']['name'];
//             $target_file = $target_dir . $image;
//             $allowUpload = true;
//             $allowtype = ['jpg', 'png', 'jpeg', 'gif'];
//             $maxfilesize = 2000000;
            
//             $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//             if (!in_array($imageFileType, $allowtype)) {// in_a
//                 $error['img_type'] = "File không được định dạng";
//                 $allowUpload = false;
//             }
            
//             if ($_FILES['image']['size'] > $maxfilesize) {
//                 echo " File không vượt quá " . $maxfilesize . "(Bytes)";
//                 $allowUpload = false;
//             }
//             // up loadfile
//             if ($allowUpload == true) {
//                 move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
//             }
    
//         }
    
    
//         product_insert($name,$image,$price,$detail,$bit_active,$color,$capacity,$id_categories);
    
//         $items = product_select_all_innerjoin();
    
//         $VIEW_NAME = 'list.php';
//     }
 