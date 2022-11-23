<?php get_header('', 'Chỉnh sửa tài khoản') ?>

<div class=" container mx-auto pt-2 ">
    <div class="bg-white ml-[180px] w-5/6 mt-[-510px]">
        <div class="font-bold text-3xl my-[85px] text-center">
            <h1>Cập nhật tài khoản</h1>
        </div>
        <form action="" method="POST" enctype="multipart/form-data " class="ml-[350px]">

            <div class=" mt-3">
                Tên tài khỏan:
                <input type="text" name="username" value="<?= $users['username'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[40px]">
            </div>
            <div class=" mt-3">
                Mật khẩu:
                <input type="text" name="password" value="<?= $users['password'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[115px]">
            </div>
            <div class=" mt-3">
                Email:
                <input type="text" name="email" value="<?= $users['email'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[75px]">
            </div>
            <div class=" mt-3">
                Số điện thoại:
                <input type="text" name="phone" value="<?= $users['phone'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[25px]">
            </div>
            <div class=" mt-3">
                Địa chỉ:
                <input type="text" name="address" value="<?= $users['address'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[5px]">
            </div>
            <div class=" mt-3">
                Chức vụ:
                
                <select name="id_role" id="">
                           <?php foreach ($role as $value) { ?>
                              <option value="<?= $value['id_role'] ?>"><?php echo $value['name_role']; ?></option>
                           <?php
                           }
                           ?>
                        </select>
            </div>
            <div class="text-center">
                <button type="submit" class="w-[163px] h-[50px] bg-orange-300 rounded-md text-white	my-[50px] ">Thêm mới</button>
            </div>
        </form>
    </div>
</div>
<?php get_footer() ?>

