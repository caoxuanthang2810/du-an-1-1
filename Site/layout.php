<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TITLE_NAME ?></title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Asset/Css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Asset/Javascript/main.js"></script>
</head>

<body >

    <!-- Header -->
    <div class="">
        <div class="container mx-auto flex justify-between items-center border-b-2">
            <div class="">
                <ul class="flex gap-6 text-[13px] items-center">
                    <li class="logo__item">
                        <a class="flex" href="https://goo.gl/maps/dfQDF4H3aH7vK4ue9">
                            <img src="https://cdn.pnj.io/images/image-update/layout/icon-stores-new.svg" alt="">
                            <span class="text-[24px] ml-2">Cửa hàng</span>
                        </a>
                    </li>

                    <li class="logo__item">
                        <a class="flex" href="tel:+1800545457">
                            <img src="https://cdn.pnj.io/images/image-update/layout/icon-hotline-new.svg" alt="">
                            <span class="text-[24px] ml-2">1800 54 54 57</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <img class="h-[150px]" src="../Asset/Image/logo/—Pngtree—golden leaf camera photography logo_8535019 4.png" alt="">
            </div>

            <div class="flex gap-8 items-center">

                <div>
                    <ul class="flex gap-5">
                        <li class="border border-[#EFA969] rounded-[10px] p-3 font-bold">
                            <a href="./index.php?dang-nhap">Đăng nhập</a>
                        </li>
                        <li class="bg-[#EFA969] rounded-[10px] font-bold p-3">
                            <a href="./index.php?dang-ky">Đăng ký</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <ul>
                        <li>
                            <a href="./index.php?gio-hang" class="flex items-center">
                                <!-- <img src="https://cdn.pnj.io/images/image-update/layout/icon-cart-new.svg" alt=""> -->
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="ml-2">Giỏ hàng</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        
    </div>

    <!-- Navbar -->

    <div class="mt-2 ">
        <div class="container mx-auto">
            <div class="py-[5px] flex items-center justify-between border-b-2 border-slate-500 h-[80px]">
                <div>
                    <ul class="flex gap-5">
                        <li class="hover:text-black hover:underline text-lg "><a href="./index.php">Trang chủ</a></li>
                        <li class="hover:text-black hover:underline text-lg"><a href="./index.php?gioi-thieu">Giới thiệu</a></li>
                        <li class="hover:text-black hover:underline text-lg"><a href="./index.php?danh-muc">Danh mục sản phẩm</a></li>
                    </ul>
                </div>
                <div class="form__search max-w-[35%] py-2 ">
                    <form action="" class="flex ">
                        <input type="text" placeholder="Tìm Kiếm Nhanh" class=" bg-[#ededed] border-[#ededed] text-[18px] rounded-[35px] pl-2 outline-transparent" required>
                        <button class="form__search_btn text-[24px] pr-2 ml-3">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>
            </div>


        </div>
    </div>

    <!-- Content -->

    <main>
        <?php include_once $VIEW_NAME ?>
    </main>

    <!-- Footer -->
    
    <div class="container mx-auto py-4 border-2px-white md:block hidden border-t-2 border-slate-500">
        <div class="flex justify-between">
            <div class="w-[200px] h-[200px]">
                <img src="../Asset/Image/logo/—Pngtree—golden leaf camera photography logo_8535019 4.png" class="w-full h-full" alt="">
            </div>
            <div class="text-right font-medium">
                <span>Copyright © 2015 CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ PHÂN PHỐI BÌNH MINH <br>
                    GPDKKD số 0310697334, cấp ngày 17/03/2011 tại Sở kế hoạch và Đầu tư TP.Hồ Chí Minh <br>
                    info@binhminhdigital.com <br>
                    Trụ sở chính: 116 Nguyễn Văn Thủ, phường Đa Kao, quận 1, TP.Hồ Chí Minh, Việt Nam <br>
                    Show room:Toà Sarica B.002, Đường D9, Khu Đô Thị Sa La, Phường An Lợi Đông, TP. Thủ Đức (Quận 2 cũ) <br>
                    Hồ Chí Minh, Việt Nam, 700000 <br>
                    Tel: 028.6296.6620</span>
            </div>
        </div>
    </div>
</body>

</html>