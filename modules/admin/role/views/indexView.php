<?php get_header('', 'Chức vụ') ?>

<!--begin::Subheader-->
<div class="bg-gray-300 pt-2">
    <div class=" container mx-auto  ">
        <div class="ml-[180px] w-5/6 mt-[-510px]">
            <div class="bg-slate-100 h-[50px] ">

                <table>
                    <tr class="text-center h-[55px]">
                        <th class="w-[100px]">ID</th>

                        <th class="w-[1250px]">Chức vụ</th>

                        <th class="w-[100px]">Hành động</th>

                    </tr>

                    <?php foreach ($role as $key) :
                        extract($key)
                    ?>
                        <tr class="text-center h-[55px]">
                            <td><?=$id?></td>
                            <td><?= $name_role?></td>
                            <td>
                                <a href="?role=admin&mod=role&action=update&id=<?=$id?>">
                                    <button> <i class="fa-solid fa-pen mr-2"></i></button>
                                </a>
                                <a href="?role=admin&mod=role&action=delete&id=<?=$id?>" onclick="return confirm('Bạn chắc chắn muốn xoá danh mục: <?php echo $row['name'] ?> không? Hành động sẽ xoá danh mục và toàn bộ sản phẩm có trong danh mục này.')">
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