<?php get_header('', 'Danh mục') ?>

<!--begin::Subheader-->
<div class=" container mx-auto pt-2 ">

    <div class="bg-white  ml-[180px] w-5/6 mt-[-510px] ">

        <form action="" class="flex my-[20px] justify-between">
            <div>
            </div>
            <div>
                <div class="">
                    <button class="w-[163px] h-[50px] bg-amber-400 text-white ml-[20px] rounded-[5px] ">Thêm mới</button>
                </div>
            </div>
        </form>


        <div class="bg-white ">
            <div class="bg-slate-100 h-[50px] ">
                <table>
                    <tr class="text-center h-[55px]">
                        <th class="w-[100px]">ID</th>
                        <th class="w-[1250px]">Tên danh mục</th>
                        <th class="w-[200px]">Hành động</th>

                    </tr>
                   <?php
                    foreach ($categories as $row) :
                       ?>

                    <tr class="text-center h-[55px]">
                        <td><?=$row['id']?></td>
                        <td><?=$row['name_cate']?></td>
                        <td><a href="?role=admin&views=category=update_View?id=<?php echo $row['id'] ?>"><button> <i class="fa-solid fa-pen mr-2"></i></button></a>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                      <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>
</div>

</div>
<?php get_footer() ?>