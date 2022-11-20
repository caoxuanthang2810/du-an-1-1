<?php get_header('', 'Bình luận') ?>

    <!--begin::Subheader-->
    <div class=" bg-gray-300 pt-2  ">
    <div class=" container mx-auto  ">
       
        <div class="bg-white w-5/6 ml-[180px] mt-[-510px]">
            <div class="bg-slate-100 h-[50px] ">

                <table>
                    <tr class="text-center h-[55px]">
                        <th class="w-[100px]">ID</th>
                        <th class="w-[650px]">Nội dung</th>
                        <th class="w-[250px]">Thời gian bình luận</th>
                        <th class="w-[200px]">Mã sản phẩm</th>
                        <th class="w-[200px]">Mã khách hàng</th>
                        <th class="w-[200px]">Hành động</th>
                    </tr>
                    <?php foreach($comment as $row):?>
                     
                    <tr class="text-center h-[55px]">
                        <td><?=$row['id']?></td>
                        <td><?=$row['content']?></td>
                        <td><?=$row['time']?></td>
                        <td><?=$row['id_product']?></td>
                        <td><?=$row['id_user']?></td>
                        <td>

                                <button> <i class="fa-solid fa-pen mr-2"></i></button>
                                <a href="?role=admin&mod=comment&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xoá danh mục: <?php echo $row['content'] ?> không? Hành động sẽ xoá danh mục và toàn bộ sản phẩm có trong danh mục này.')">
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