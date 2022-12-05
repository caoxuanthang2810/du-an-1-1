<?php get_header('', 'Thanh toán') ?>
<div class="container mx-auto h-[1000px] ">
    <h2 class="font-bold text-[25px] text-center my-9">Thanh toán</h2>
    <?php if (isset($_SESSION['cart']['buy'])) { ?>
        <form action=""  method="POST">
        <div class="grid grid-cols-2 grap-5"> 

            <?php foreach ($cart['buy'] as $key) : ?>
                <div class="border border-[#EFA969] h-[200px] mb-10 ml-10">
                    <div class="grid grid-cols-2 grap-4">
                        <div>
                            <img src="./public/images/container/<?= $key['img']; ?>" alt="" class=" w-[180px] ml-4">
                        </div>
                        <div class="mt-10">
                            <h3 class="font-semibold text-[21px] "><?php echo $key["name"] ?></h3>
                            <p class=" font-semibold text[18px] ">Số Lượng: <?php echo $key["qty"] ?></p>
                            <span class="font-bold text-[18px] text-red-500">Giá: <?= currency_format($total) ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
            <div class=" mt-[28px] text-center">
                <div class=" grid grid-cols-2">

                    <div class="mt-[48px]">
                        <div class="mt-[-36px] mb-[12px] font-bold">Họ và tên</div>
                        <input type="text" name="fullname" id="fullname" value="<?= get_auth()['fullname'] ?>" class="border border-[#EFA969] w-2/3 py-4 pl-4 rounded-[5px]" placeholder="TriChua18">
                        <span id="msg-error-fullname" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                    </div>

                    <div class="">
                        <div class="my-3 font-bold">Số điện thoại</div>
                        <input type="text" name="phone" id="phone" value="<?= get_auth()['phone'] ?>" class="border border-[#EFA969] w-2/3 py-4 pl-4 rounded-[5px]" placeholder="0385XXXXXX">
                        <span id="msg-error-phone" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                    </div>

                    <div class="">
                        <div class="my-3 font-bold">Email</div>
                        <input type="text" name="email" id="email" value="<?= get_auth()['email'] ?>" class="border border-[#EFA969] w-2/3 py-4 pl-4 rounded-[5px]" placeholder="John.snow@gmail.com">
                        <span id="msg-error-email" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                    </div>

                    <div class="">
                        <div class="my-3 font-bold">Địa chỉ</div>
                        <input type="text" name="address" id="address" value="<?= get_auth()['address'] ?>" class="border border-[#EFA969] w-2/3 py-4 pl-4 rounded-[5px]" placeholder="VD: Hà nội">
                        <span id="msg-error-address" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                    </div>


                </div>

                <a href="?role=client&mod=hoa_don"></a>
                <div class="mt-[-150px]">
                    <button class=" border border-[#EFA969] w-[100px] mt-[30px] font-bold p-4 text-center hover:bg-[#EFA969] " type="submit">Mua</button>
                </div>


            </div>
        </form>
    <?php
    } else {
    ?>
        <div class="flex justify-center">
            <div class="">
                <img src="./public/images/logo/no-cart.png" alt="">
                <div class="flex justify-center">
                    <span class="mt-5 font-bold text-[24px]">
                        Chưa có sản phẩm
                    </span>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
<?php get_footer() ?>