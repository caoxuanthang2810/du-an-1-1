<?php get_header('', 'Thông tin cá nhân') ?>
<div class="container mx-auto">
    <div class="flex justify-center mt-[28px]">
        <form action="" class="w-[600px] flex justify-center mb-[190px]" method="POST" enctype="multipart/form-data">
            <div>
                <div class="flex justify-center">
                    <div class="text-center">
                        <span class="text-[32px] font-bold">Thông tin cá nhân</span>
                    </div>
                </div>

                <div class="mt-[48px]">
                    <div class="my-3 font-bold">Họ và tên</div>
                    <input type="text" name="fullname" value="<?=$user['fullname']?>" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="Họ và tên">
                </div>

                <div class="">
                    <div class="my-3 font-bold">Số điện thoại</div>
                    <input type="text" name="phone" value="0<?=$user['phone']?>" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="Số điện thoại">
                </div>

                <div class="">
                    <div class="my-3 font-bold">Mật khẩu</div>
                    <input type="password" name="password" value="<?=$user['password']?>" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="Mật khẩu">
                </div>

                <div class="">
                    <div class="my-3 font-bold">Email</div>
                    <input type="email" name="email" value="<?=$user['email']?>" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="phucquyet@gmail.com">
                </div>

                <div class="">
                    <div class="my-3 font-bold">Địa chỉ</div>
                    <input type="text" name="address" value="<?=$user['address']?>" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow">
                </div>

                <div>
                <div class="my-3 font-bold">Hình ảnh</div>

                <img src="./public/images/container/<?= $user['img']; ?>" alt="" class="mx-auto mt-3">
                </div>
                <div>
                    <input type="file" name="img">
                </div>

                <div class="w-[400px] mt-[30px] font-bold p-4 flex bg-[#EFA969] justify-center items-center">
                    <button type="submit">Thay đổi</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php get_footer() ?>