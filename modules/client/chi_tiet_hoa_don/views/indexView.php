<?php get_header('', 'Hóa đơn') ?>

<!--  -->
<div class="container mx-auto mb-6">
    <h2 class="font-bold text-[25px] text-center my-9">Hóa đơn thanh toán</h2>

    <?php foreach ($bills as $bill) : ?>
        <div class="border border-[#EFA969] my-5 h-[200px]">
            <div class="flex justify-center">
                <div class="ml-[-300px]">
                    <img src="./public/images/container/<?= $bill['img']; ?>" alt="" class=" w-[180px] ">
                </div>
                <div>
                    <h3 class="font-semibold text-[21px] my-[50px] ml-[110px]"><?php echo $bill["code"] ?></h3>
                </div>
            </div>
            <div class="text-center">
                <div>
                    <p class=" mt-[-80px] font-semibold text[18px] ml-[-40px]">Số Lượng: <?php echo $bill["quantily"] ?></p>
                </div>


            </div>
            <div class="text-center  mt-[-70px] ml-[460px]">
            <td class="w-[200px]">
                                <p class="text-[14px] text-[#222] font-normal text-[red]">
                                    
                                </p>
                            </td>
                <span class="font-bold text-[18px] text-red-500">Giá: <?php
                                    $total = 0;
                                    $total += $bill['price_pro'] * $bill['quantily'];
                                    echo currency_format($total) ?></span>
            </div>
            <div class="text-center  mt-[10px] ml-[460px]">Thời gian: <?= $bill['time'] ?></div>
            <div class="text-center  mt-[10px] ml-[460px]">Trạng thái: <?= $bill['name_status'] ?></div>
        </div>
        <?php endforeach; ?>
        
        
        <br>
        
        <div class="text-center mt-[50px] mb-[30px] ">
            <div class="grid grid-cols-1 mb-10">

                <span class="font-bold text-[18px] text-red-500">Tổng giá: <?= currency_format($bill['price_bill']) ?></span>
                <span class="font-bold text-[18px] text-red-500">Chiết khấu : 0%</span>
                <span class="font-bold text-[18px] text-red-500">Thành tiền: <?= currency_format($bill['price_bill']) ?></span>
            </div>
            
            <?php if($bill['status'] == 1): ?>
            <form action="" method="POST">

                <a href="">
                    <button class="rounded-t-md rounded-b-md w-[163px] h-[50px] font-bold text-white bg-orange-300" type="submit">Hủy Đơn Hàng</button>
                </a>
            </form>
            <?php elseif($bill['status'] == 4): ?>
                <h1>Đơn hàng đã hủy</h1>
            <?php else: ?>
                <h1>Đơn hàng đã giao, không được hủy</h1>
            <?php endif; ?>
        </div>
</div>
<!-- Địa chỉ nhận hàng -->



<!-- footer -->
<?php get_footer() ?>