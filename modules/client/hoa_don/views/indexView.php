<?php get_header('', 'Hóa đơn') ?>

<!--  -->
<div class="container mx-auto mb-6">
    <h2 class="font-bold text-[25px] text-center my-9">Hóa đơn thanh toán </h2>

    <?php foreach ($bills as $bill) : ?>
        <a href="?role=client&mod=chi_tiet_hoa_don&code=<?=$bill['code'] ?>">
    
            <div class="border border-[#EFA969] h-[200px] my-7">
                <div class="text-center">
                    <div>
                        <!-- <img src="./public/images/container/<?= $bill['img']; ?>" alt="" class=" w-[180px]"> -->
                    </div>
                    <div>
                        <h3 class="font-semibold text-[21px] mt-[70px] ml-[-100px]"><?php echo $bill["code"] ?></h3>
                    </div>
                </div>
                <div class="text-center">
                    <div>
                        <!-- <p class=" mt-[-80px] font-semibold text[18px] ml-[20px]">Số Lượng: <?php echo $bill["quantily"] ?></p> -->
                    </div>
    
    
                </div>
                <div class="text-center  mt-[-50px] ml-[460px]">
                    <!-- <span class="font-bold text-[18px] text-red-500">Giá: <?= currency_format($bill['price']) ?></span> -->
                </div>
                <div class="text-center  mt-[10px] ml-[360px]">Thời gian: <?= $bill['time'] ?></div>
                <div class="text-center  mt-[10px] ml-[360px]">Thời gian: <?= $bill['name_status'] ?></div>
                <div class="text-center  mt-[10px] ml-[360px]"></div>
            </div>
            
    </a>
    <?php endforeach; ?>

    <br>
    <div class="text-center mt-[90px] mb-[60px]">
        <a href="?role=client&mod=home">
            <button class="rounded-t-md rounded-b-md w-[163px] h-[50px] font-bold text-white bg-orange-300">Trang chủ</button>
        </a>
        
    </div>
</div>
<!-- Địa chỉ nhận hàng -->



<!-- footer -->
<?php get_footer() ?>