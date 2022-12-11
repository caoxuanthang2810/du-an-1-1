<?php get_header('', 'Hóa đơn') ?>

<!--  -->
<div class="container mx-auto mb-6">
    <h2 class="font-bold text-[25px] text-center my-9">Hóa đơn thanh toán</h2>

    <?php foreach ($bills as $bill) : ?>
        <div class="border border-[#EFA969] my-5 h-[200px] grid grid-cols-3">

            
            <div class="mx-auto">
                <img src="./public/images/container/<?= $bill['img']; ?>" alt="" class=" w-[180px] ">
            </div>
            <div class="my-auto">
                <h3 class="font-semibold text-[21px] mt-[20px]"><?= $bill['name_pro'] ?></h3>
                <p class="  font-semibold text[18px] mt-[10px]">Số Lượng: <?php echo $bill["quantily"] ?></p>
            </div>

            <div class=" m-auto ">
              
                <span class="font-bold text-[18px]  text-red-500">Giá: <?php
                                                                        $total = 0;
                                                                        $total += $bill['price_pro'] * $bill['quantily'];
                                                                        echo currency_format($total) ?></span>
                <div class="  mt-[10px]">Thời gian: <?= $bill['time'] ?></div>
                <div class="  mt-[10px]">Trạng thái: <?= $bill['name_status'] ?></div>
            </div>
        </div>
    <?php endforeach; ?>


    <br>

    <div class="text-center mt-[50px] mb-[30px] ">
        <div class="grid grid-cols-1 mb-10">

            <span class="font-bold text-[18px] text-red-500">Tổng giá: <?= currency_format($bill['price_bill']) ?></span>
            <span class="font-bold text-[18px] text-red-500">Chiết khấu : 0%</span>
            <span class="font-bold text-[18px] text-red-500">Thành tiền: <?= currency_format($bill['price_bill']) ?></span>
        </div>

        <?php if ($bill['status'] == 1) : ?>
            <form action="" method="POST">

                <a href="">
                    <button class="rounded-t-md rounded-b-md w-[163px] h-[50px] font-bold text-white bg-orange-300" type="submit">Hủy Đơn Hàng</button>
                </a>
            </form>
        <?php elseif ($bill['status'] == 4) : ?>
            <h1>Đơn hàng đã hủy</h1>
        <?php else : ?>
            <h1>Đơn hàng đã giao, không được hủy</h1>
        <?php endif; ?>
    </div>
</div>
<!-- Địa chỉ nhận hàng -->



<!-- footer -->
<?php get_footer() ?>