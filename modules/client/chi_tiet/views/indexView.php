<?php get_header('', 'Chi tiết sản phẩm') ?>
<div class=" container mx-auto">
    <?php //foreach ($data as $key) : 
    ?>
    <!-- Copy -->
    <div class=" mt-10  border-b-2 border-gray-500">
        <h1 class="text-2xl text-[#FF0000] ml-12  font-medium"><?php echo $products["name"] ?></h1>
        <div class="grid grid-cols-2 gap-2">
            <div class="">
                <!-- <img src="./public/images/container/canon-eos-1500d-kit-1855mm-f3556-iii(2) 1.png" alt="" class="w-95% h-80%"> -->
                <img src="./public/images/container/<?= $products['img']; ?>" alt="" class="w-95% h-80%">
            </div>

            <div class="">
                <p class="text-xl text-black-900 my-7 font-normal">Mã sản phẩm: <span><?php echo $products["id"] ?></span></p>
                <p class="text-xl text-black-900 my-7 font-normal">Số lượng: <Span><?php echo $products["quantily"] ?></Span></p>
                <p class="text-xl text-black-900 my-7 font-normal">Giá bán <span class="text-[#FF0000]"><?php echo currency_format($products["price"]) ?></span></p>
                <p class="text-xl text-black-900 my-7 font-normal">Thương hiệu: <span><?php echo $products["name_cate"] ?></span></p>
                <p class="text-xl text-black-900 my-7 font-normal">Bảo hành: <span><?php echo $products["name_insurance"] ?></span></p>
                <p class="text-xl text-black-900 my-10 font-normal">Xuất sứ : <span><?php echo $products["name_made_in"] ?></span></p>
                <div class="flex ml-4">
                    <i class="fa-solid fa-plus mt-2 mr-5 text-3xl"></i>
                    <div class="w-[60px] h-[50px] border-2 border-slate-500 text-center"><span class="leading-[40px] text-3xl">1</span></div><i class="fa-solid fa-minus mt-2 ml-5 text-3xl"></i>
                </div>
                <div class="flex mt-6 my-10">
                    <div class="w-[150px] h-[55px] bg-[#EFA969] text-center mt-4 rounded ">
                        <a href="?role=client&mod=thanh_toan&id=<?php echo $products["id"] ?>" class="text-2xl text-[#FFFFFF] leading-[50px] font-bold ">Mua Ngay</a>
                    </div>
                    <div class="w-[150px] h-[55px] bg-[#FFFFF] text-center mt-4  w-1/5 ml-10 rounded border-2 border-[#EFA969]">
                        <a href="?role=client&mod=gio_hang&id=<?php echo $products["id"] ?>" class="text-2xl text-[#EFA969] leading-[50px] font-bold  ">Giỏ Hàng</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class=" border-b-2 border-gray-500">
        <h2 class="text-2xl text-[#000000] font-bold mt-4">TÍNH NĂNG NỔI BẬT</h2>

        <div class="ml-10 grid grid-cols-2 gap-2 w-80%">
            <!-- <div class="">
                <p class="text-xl text-[#000000] font-bold mt-4">Máy Ảnh Canon EOS 1500D Kit 18-55mm F3.5-5.6 IS II</p>
                <p class="text-xl text-[#000000] mt-4">- Cảm biến 24.1MP APS-C CMOS</p>
                <p class="text-xl text-[#000000] mt-2"> - Chíp xử lý hình ảnh DIGIC 4+</p>
                <p class="text-xl text-[#000000] mt-4"> - Màn hình LCD 3.0" 920.000 điểm ảnh</p>
                <p class="text-xl text-[#000000] mt-4"> - Quay phim Full HD 1080p 30 fps</p>
                <p class="text-xl text-[#000000] mt-4"> - Chụp liên tục 3 hình/ giây</p>
                <p class="text-xl text-[#000000] mt-4"> - Lấy nét tự động 9 điểm cross-type</p>
                <p class="text-xl text-[#000000] mt-4"> - ISO 100-6400 (Có thể mở rộng đến 12.800)</p>
                <p class="text-xl text-[#000000] mt-4"></p>

            </div>
            <div class="mt-14">
                <p class="text-xl text-[#000000] mt-4">- Hỗ trợ thẻ SD/SDHC/SDXC</p>
                <p class="text-xl text-[#000000] mt-4">- Kết nối wifi, Tích hợp GPS/NFC</p>
                <p class="text-xl text-[#000000] mt-4">- Trọng lượng: 427g</p>
                <p class="text-xl text-[#000000] mt-4">- Kích thước: 129X101.3X77.6 mm</p>
                <p class="text-xl text-[#000000] mt-4">- Phụ kiện đi kèm: cáp trước sau ống kính, pin, sạc pin, dây đeo, CD-ROM, cáp USB, sách hướng dẫn, thẻ bảo hành</p>
            </div> -->
            <div class="mt-5">
                <span><?php echo $products["description"] ?></span>
            </div>
        </div>
    </div>

    <?php //endforeach; 
    ?>
    <div class="">
        <h1 class="text-2xl text-[#000000] font-bold mt-4 my-10">Đánh giá sản phẩm </h1>
        <div class="border-2 border-gray-400 my-10 rounded ml-10">
            <div class="ml-10">
                <?php foreach($comments as $row):?>
                    <div class="">
                        <?php if($row["username"] == "Admin"): ?>
                            <h2 class="text-xl text-[#FF0000] font-bold mt-4"><?php echo $row["username"]?> - Quản trị viên </h2>
                            <span class="text-center"><?php echo $row["time"]?></span>
                        <?php else: ?>
                            <h2 class="text-xl text-[#59eaeb] font-bold mt-4"><?php echo $row["username"]?> - Khách hàng </h2>
                            <span class="text-center"><?php echo $row["time"]?></span>
                        <?php endif; ?>
                        <p class="text-xl text-black-900 ml-2 font-normal my-2"><?php echo $row["content"] ?></p>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class=" text-center my-4">
            <?php if (is_auth()) : ?>
                <form action="?role=client&mod=chi_tiet&action=comment&id=<?php echo $products["id"] ?>" method="POST">
                    <input type="text" name="content" id="" class="w-[700px] h-[40px] rounded-xl border-2 border-gray-400 pl-2" placeholder="Nhập bình luận...">
                    <button class="w-[100px] h-[40px] bg-[#EFA969] rounded-3xl text-xl ml-6   text-[#FFFFFF] font-medium">Gửi</button>
                </form>
            <?php else : ?>
                <form action="" method="post">
                    <input type="text" name="" id="" class="w-[700px] h-[40px] rounded-xl border-2 border-gray-400 pl-2" placeholder="Bạn phải đăng nhập mới sử dụng chức năng bình luận..." disabled>
                    <div class="hidden">
                        <button class="w-[100px] h-[40px] bg-[#EFA969] rounded-3xl text-xl ml-6   text-[#FFFFFF] font-medium" required>Gửi</button>
                    </div>
                </form>
            <?php endif; ?>
        </div>
    </div>
    <div class=" contener text-center my-14">
        <div class="flex justify-between">
            <div>
                <h2 class="mt-[15px] font-bold text-[25px] mb-5">Sản phẩm cùng loại</h2>
            </div>
            <div class="mt-[23px] rounded-lg border-2 border-[#EFA969] w-[100px] h-[40px] text-center hover:bg-[#EFA969] hover:text-white mr-6">
                <button class=" font-bold  leading-[30px] text-[18px]  ">Xem Thêm</button>
            </div>
        </div>


        <div>
            <div class="grid grid-cols-4 gap-24 text-center">
                <div class="border-2 border-[#EFA969] rounded-xl">
                    <div>
                        <img src="../Asset/Image/product/canon-eos-1500d-kit-1855mm-f3556-iii(2) 1.png" alt="" class="mx-auto mt-3">
                    </div>
                    <div>
                        <p class="font-semibold mt-2 mb-2">MÁY ẢNH CANON EOS 1500D KIT EF-S18-55MM F3.5-5.6 IS II</p>
                    </div>
                    <div>
                        <span class="text-red-500 font-bold ">11,090,000 VNĐ</span>
                    </div>
                    <div class="mt-3 mb-4">
                        <button class="border border-[#D2BDBD] font-bold w-[100px] text-[18px] hover:bg-[#EFA969] h-[40px] hover:text-white rounded-lg">Mua Hàng</button>
                    </div>
                </div>
                <div class="border border-[#EFA969]  rounded-xl">
                    <div>
                        <img src="../Asset/Image/product/may-anh-canon-eos-m50-ii-kit-efm1545mm 1.png" alt="" class="mx-auto mt-3">
                    </div>
                    <div>
                        <p class="font-semibold mt-2 mb-2">MÁY ẢNH CANON EOS M50 II KIT EF-M15-45MM F3.5-6.3 IS STM - ĐEN</p>
                    </div>
                    <div>
                        <span class="text-red-500 font-bold">21,290,000 VNĐ</span>
                    </div>
                    <div class="mt-3 mb-4">
                        <button class="border border-[#D2BDBD] font-bold w-[100px] text-[18px] hover:bg-[#EFA969] h-[40px] hover:text-white rounded-lg">Mua Hàng</button>
                    </div>
                </div>
                <div class="border border-[#EFA969] rounded-xl ">
                    <div>
                        <img src="../Asset/Image/product/CX64700_front_black 1.png" alt="" class="mx-auto mt-3">
                    </div>
                    <div>
                        <p class="font-semibold mt-[45px]">MÁY ẢNH SONY ZV-1F</p>
                    </div>
                    <div class="mt-[25px]">
                        <span class="text-red-500 font-bold">13,990,000 VNĐ</span>
                    </div>
                    <div class="mt-3 mb-3">
                        <button class="border border-[#D2BDBD] font-bold w-[100px] text-[18px] hover:bg-[#EFA969] h-[40px] hover:text-white rounded-lg">Mua Hàng</button>
                    </div>
                </div>
                <div class="border border-[#EFA969] rounded-xl ">
                    <div>
                        <img src="../Asset/Image/product/may-anh-canon-eos-r-ong-kinh-canon-rf-24-105mm-f4-l-is-usm-hang-nhap-khau 1.png" alt="" class="mx-auto mt-3">
                    </div>
                    <div>
                        <p class="font-semibold mt-3">MÁY ẢNH CANON EOS R KIT RF24-105MM F4 L IS USM (NHẬP KHẨU)</p>
                    </div>
                    <div>
                        <span class="text-red-500 font-bold">64,990,000 VNĐ</span>
                    </div>
                    <div class="mt-3 mb-3">
                        <button class="border border-[#D2BDBD] font-bold w-[100px] text-[18px] hover:bg-[#EFA969] h-[40px] hover:text-white rounded-lg">Mua Hàng</button>
                    </div>

                </div>
            </div>

        </div>



    </div>
</div>
<?php get_footer() ?>