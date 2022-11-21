<?php get_header('', 'Quản lý khách hàng') ?>


<div class="bg-gray-300 pt-2">
    <div class=" container mx-auto  ">

        <div class="bg-white  ml-[180px] w-5/6 mt-[-510px] ">
            <div class="bg-slate-100 h-[50px] ">


                <table>
                    <tr class="text-center h-[55px] ">
                        <th class="w-[100px]">ID</th>
                        <th class="w-[250px]">Tên tài khoản</th>
                        <th class="w-[500px]">Mật khẩu</th>
                        <th class="w-[200px]">Email </th>
                        <th class="w-[200px]">Số điện thoại</th>
                        <th class="w-[200px]">Địa chỉ</th>
                        <th class="w-[200px]">Chức vụ</th>
                        <th class="w-[200px]">Hành động</th>

                    </tr>
                   <?php foreach($users as $row):?>
                    <tr class="text-center h-[55px]">
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['password'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['address'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><a href="?role=admin&mod=users&action=update&id=<?php echo $row['id'] ?>"> <i class="fa-solid fa-pen mr-2"></i></a>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                   <?php endforeach; ?>

                </table>
            </div>
        </div>
    </div>
</div>

    <?php get_footer() ?>