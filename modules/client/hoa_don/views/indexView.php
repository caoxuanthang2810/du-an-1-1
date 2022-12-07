<?php get_header('', 'Hóa đơn') ?>

<!--  -->
<div class="container mx-auto mb-6">
    <?php if (is_auth()) : ?>
        <h2 class="font-bold text-[25px] text-center my-9">Hóa đơn thanh toán </h2>

        <div class="grid grid-cols-2 gap-10">
            <?php foreach ($bills as $bill) : ?>


                <div class="border border-[#EFA969] h-[200px] my-7 ">


                    <div class="grid grid-cols-2 ">
                        <div class="ml-3">

                            <h3 class="font-semibold text-[21px] leading-[100px] "> Mã đơn hàng: <?php echo $bill["code"] ?></h3>
                            <div class="  ">Thời gian: <?= $bill['time'] ?></div>
                            <div class="  ">Trạng thái: <?= $bill['name_status'] ?></div>
                        </div>
                        <div class="ml-[110px]">
                            <a href="?role=client&mod=chi_tiet_hoa_don&code=<?= $bill['code'] ?>">
                                <div class="rounded-t-md mt-[120px] rounded-b-md w-[163px] h-[50px] font-bold text-white bg-orange-300 leading-[50px] text-center"> Chi tiết đơn hàng</div>
                            </a>
                        </div>
                    </div>

                </div>


            <?php endforeach; ?>
        </div>

        <br>
        <div class="text-center mt-[90px] mb-[60px]">
            <a href="?role=client&mod=home">
                <button class="rounded-t-md rounded-b-md w-[163px] h-[50px] font-bold text-white bg-orange-300">Trang chủ</button>
            </a>

        </div>
    <?php else : ?>
        <div class="flex justify-center mt-4">
            <h1 class="font-bold text-[18px]">Bạn phải đăng nhập mới dùng chức năng này</h1>
        </div>
    <?php endif; ?>
</div>
<!-- Địa chỉ nhận hàng -->



<!-- footer -->
<?php get_footer() ?>