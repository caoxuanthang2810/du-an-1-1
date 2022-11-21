<?php get_header('', 'Trang quản lý sản phẩm') ?>

<div class="  bg-gray-300 pt-2 ">
   <div class="container mx-auto ">


      

      <form action="" class="flex my-[20px] justify-between my-[20px] mx-[200px] mt-[-510px]">
         <div>
            <input type="text" class="pl-2 h-[42px] rounded-[5px]" placeholder="Nhập từ khóa tìm kiếm">
            <button class="w-[111px] h-[42px] bg-white border-2 ml-[20px] rounded-[5px]">
               <p>Tìm kiếm</p>
            </button>
         </div>
         <div>
            <div class="">

               <a href="?role=admin&mod=products&action=create">

               </a>
               <button class="w-[163px] h-[50px] bg-amber-400 text-white ml-[20px] rounded-[5px] ">Thêm mới</button>
            </div>
         </div>
      </form>

      <div class="bg-white  ml-[180px]  w-5/6">
         <div class="bg-slate-100 h-[50px] ">

            <table>
               <tr class="text-center h-[55px]">
                  <th class="w-[100px]">ID</th>
                  <th class="w-[250px]">Tên đơn</th>
                  <th class="w-[500px]">Giá sản phẩm</th>
                  <th class="w-[200px]">Số lượng</th>
                  <th class="w-[200px]">Ảnh sản phẩm</th>
                  <th class="w-[200px]">Bảo hành</th>
                  <th class="w-[200px]">Xuất Xứ</th>
                  <th class="w-[200px]">Mã danh mục</th>
                  <th class="w-[200px]">Hành động</th>

               </tr>
               <?php foreach ($products as $row) : ?>
                    
                  <tr class="text-center h-[55px]">
                     <td><?= $row['id'] ?></td>
                     <td><?= $row['name'] ?></td>
                     <td><?= $row['price'] ?></td>
                     <td><?= $row['quantily'] ?></td>
                     <td><img src="../public/images/container/<?= $row['image']; ?>" alt=""></td>
                     <td><?= $row['name_insurance'] ?></td>
                     <td><?= $row['name_made_in'] ?></td>
                     <td><?= $row['name_cate'] ?></td>
                     <td>
                        <a href="#"><button> <i class="fa-solid fa-pen mr-2"></i></button></a>

                        <a href="?role=admin&mod=products&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xoá danh mục: <?php echo $row['name'] ?> không? Hành động sẽ xoá danh mục và toàn bộ sản phẩm có trong danh mục này.')">
                           <button><i class="fa-solid fa-trash-can"></i></button>
                        </a>
                     </td>
                  </tr>
               <?php endforeach; ?>

            </table>
            <!-- <table>
         <tr>
            <th class="ml-[30px]">Tên đơn</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng</th>
            <th>Ảnh sản phẩm</th>
            <th>Bảo hành</th>
            <th>Xuất Xứ</th>
            <th>Mã danh mục</th>
            <th>Hành động</th>
         </tr>
         
         <tr>
            <td>1</td>
            <td>5</td>
            </tr>
            <tr>
            <td>9</td>
            <td>10</td>
            </tr>
         </table> -->


         </div>
      </div>
   </div>
</div>
<?php get_footer() ?>