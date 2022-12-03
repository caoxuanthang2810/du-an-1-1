<?php get_header('', 'Hóa đơn') ?>

<!--  -->
<div class="container mx-auto mb-6">
    <h2 class="font-bold text-[25px] text-center my-9">Hóa đơn thanh toán thành công</h2>
    <div class="border border-[#EFA969] h-[200px]">
        <div class="flex justify-center">
            <div>
                <img src="./public/images/container/<?= $bills['img']; ?>" alt="" class="w-[180px]">
            </div>
            <div>
                <h3 class="font-semibold text-[21px] my-[50px] mx-7"><?= $bills['name']; ?></h3>
            </div>
        </div>
        <div class="text-center">
            <div>
                <p class=" mt-[-80px] font-semibold text[18px] ml-[20px]">Hãng <?= $bills['name_cate']; ?></p>
            </div>
            <div>
                <p class="font-semibold text[18px] mt-[10px] ml-[38px]">Xuất xứ: <?= $bills['name_made_in']; ?></p>
            </div>

        </div>
        <div class="text-center  mt-[-50px] ml-[460px]">
            <span class="font-bold text-[18px] text-red-500"><?= $bills['price']; ?> VNĐ</span>
        </div>
    </div>
    <br>
    <div class="">
        <h1 class="text-4xl font-normal	">Địa chỉ nhận hàng</h1><br>
        <div class=" grid grid-cols-2">
            <div>
                <p>Tên khách hàng: <?= $bills['fullname']; ?></p><br>
                <p>Số điện thoại: 0<?= $bills['phone']; ?></p><br>
                <p>Địa chỉ: <?= $bills['address']; ?></p><br>
                <p>Thời gian mua hàng: <?= $bills['time']; ?></p><br>
            </div>

            <div class="text-right">
                <p class="font-medium text-3xl">Tổng tiền</p><br>
                <p class="font-normal text-2xl text-red-500"><?= $bills['price']; ?> VNĐ</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-[90px] mb-[60px]">
        <a href="?role=client&mod=home">
            <button class="rounded-t-md rounded-b-md w-[163px] h-[50px] font-bold text-white bg-orange-300">Trang chủ</button>
        </a>
    </div>
</div>
<!-- Địa chỉ nhận hàng -->



<!-- footer -->
<?php get_footer() ?>