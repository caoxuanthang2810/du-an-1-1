<?php get_header('', 'Chức vụ') ?>

<!--begin::Subheader-->
<div class="bg-gray-300 pt-2">
    <div class=" container mx-auto  ">
        <div class="ml-[180px] w-5/6 mt-[-510px]">
            <div class="bg-slate-100 h-[50px] ">

                <table>
                    <tr class="text-center h-[55px]">
                        <th class="w-[100px]">Mã hóa đơn</th>

                        <th class="w-[1250px]">Thời gian mua</th>

                        <th class="w-[100px]">Tài khoản</th>

                        <th class="w-[1250px]">Trạng thái đơn hàng</th>

                        <th class="w-[1250px]">Giá</th>
                        
                        <th class="w-[1250px]">Code</th>
            
                    </tr>

                    <?php foreach ($bills as $key) :
                        extract($key)
                    ?>
                        <tr class="text-center h-[55px]">
                            <td><?=$id?></td>
                            <td><?= $time?></td>
                            <td><?= $fullname?></td>
                            <td><?= $name_status?></td>
                            <td><?= $price?></td>
                            <td><?= $code?></td>
                            <td>
                                <a href="?role=admin&mod=bills&action=update&id=<?=$id?>">
                                    <button> <i class="fa-solid fa-pen mr-2"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>


                </table>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>