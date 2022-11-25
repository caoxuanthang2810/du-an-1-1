<?php get_header('', 'Thanh toán') ?>
<div class="container mx-auto mb-6">
    <h2 class="font-bold text-[25px] text-center my-9">Thanh toán</h2>
    <?php foreach ($data as $key) : ?>
        <div class="border border-[#EFA969] h-[200px]">
            <div class="flex justify-center">
                <div>
                    <img src="./public/images/container/<?= $key['img']; ?>" alt="" class=" w-[180px]">
                </div>
                <div>
                    <h3 class="font-semibold text-[21px] my-[50px] mx-7"><?php echo $key["name"] ?></h3>
                </div>
            </div>
            <div class="text-center">
                <div>
                    <p class=" mt-[-80px] font-semibold text[18px] ml-[20px]">Hãng <?php echo $key["name_cate"] ?></p>
                </div>
                <div>
                    <p class="font-semibold text[18px] mt-[10px] ml-[38px]">Xuất xứ <?php echo $key["name_made_in"] ?></p>
                </div>

            </div>
            <div class="text-center  mt-[-50px] ml-[460px]">
                <span class="font-bold text-[18px] text-red-500"><?php echo $key["price"] ?> VNĐ</span>
            </div>
        </div>
    <?php endforeach; ?>
    <div class=" mt-[28px] text-center">
        <form action="?role=client&mod=thanh_toan&action=bill&id=<?php echo $key["id"] ?>" class=" mb-[190px]" method="POST">
            <div class=" grid grid-cols-2">

                <div class="mt-[48px]">
                    <div class="mt-[-36px] mb-[12px] font-bold">Họ và tên</div>
                    <input type="text" name="fullname" id="fullname" class="border border-[#EFA969] w-2/3 py-4 pl-4 rounded-[5px]" placeholder="TriChua18">
                    <span id="msg-error-fullname" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Số điện thoại</div>
                    <input type="text" name="phone" id="phone" class="border border-[#EFA969] w-2/3 py-4 pl-4 rounded-[5px]" placeholder="0385XXXXXX">
                    <span id="msg-error-phone" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Email</div>
                    <input type="text" name="email" id="email" class="border border-[#EFA969] w-2/3 py-4 pl-4 rounded-[5px]" placeholder="John.snow@gmail.com">
                    <span id="msg-error-email" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Địa chỉ</div>
                    <input type="text" name="address" id="address" class="border border-[#EFA969] w-2/3 py-4 pl-4 rounded-[5px]" placeholder="VD: Hà nội">
                    <span id="msg-error-address" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>


            </div>

            <div class="mt-[-150px]">
                    <button class=" border border-[#EFA969] w-[100px] mt-[30px] font-bold p-4 text-center hover:bg-[#EFA969] ">Mua</button>
            </div>
        </form>

    </div>
</div>
</div>
<?php get_footer() ?>