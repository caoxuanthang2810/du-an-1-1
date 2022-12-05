<?php get_header('base', $title) ?>

<?php
$category = get_list_categories();
?>
<?php
// echo "<pre>";
// print_r($user);
// echo "<pre>";
if (isset(get_auth()['id'])) {
    $id_user = get_auth()['id'];

    function get_user($id)
    {
        $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = $id ");
        return $result;
    }
    $users = get_user($id_user);
}
?>

<head>


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
                <img class="h-[150px]" src="./public/images/logo/logo.png" alt="">
            </div>

            <div class="flex gap-8 items-center">
                <div class="">
                    <?php if (is_auth()) : ?>
                        <ul class="flex gap-5">
                            <div>
                                <img class="w-[40px] h-[40px]" src="./public/images/logo/avata.png" alt="">
                            </div>
                            <div>
                                <p class="mt-[10px] text-[#FF0000]"><?php echo $users['fullname'] ?></p>
                                <?php if (is_admin()) : ?>
                                    <div>
                                        <a href="?role=admin" class="hover:underline">Trang quản trị</a>
                                    </div>
                                <?php endif ?>
                                <a href="?role=client&mod=dang_nhap&action=logout" class="hover:underline">
                                   <button>Đăng xuất</button> </a>
                            </div>
                        </ul>
                    <?php else : ?>
                        <ul class="flex gap-5">
                            <li class="border border-[#EFA969] rounded-[10px] p-3 font-bold">
                                <a href="?role=client&mod=dang_nhap">Đăng nhập</a>
                            </li>
                            <li class="bg-[#EFA969] rounded-[10px] font-bold p-3">
                                <a href="?role=client&mod=dang_ky">Đăng ký</a>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="?role=client&mod=gio_hang" class="flex items-center">
                                <!-- <img src="https://cdn.pnj.io/images/image-update/layout/icon-cart-new.svg" alt=""> -->
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span class="ml-2 hover:underline hover:text-[#7daafb]">Giỏ hàng</span>
                            </a>
                            <a href="?role=client&mod=hoa_don" class="flex items-center mt-4">
                                <!-- <img src="https://cdn.pnj.io/images/image-update/layout/icon-cart-new.svg" alt=""> -->
                                <i class="fa-solid fa-file-invoice"></i>
                                <span class="ml-2 hover:underline hover:text-[#7daafb]">Hóa Đơn</span>
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
                        <li class="hover:underline hover:text-[#7daafb] text-lg font-medium"><a href="?role=client&mod=home">TRANG CHỦ</a></li>
                        <li class="hover:underline hover:text-[#7daafb] text-lg font-medium"><a href="?role=client&mod=gioi_thieu">GIỚI THIỆU</a></li>
                        <?php foreach($category as $cate):?>
                        <li class="hover:underline hover:text-[#7daafb] text-lg font-medium"><a href="?role=client&mod=home&action=cate&id=<?= $cate['id']; ?>"><?= $cate['name_cate'] ?></a></li>
                        <?php endforeach ?>
                        
                    </ul>
                </div>
                <div class="form__search max-w-[35%] py-2 ">
                    <form action="?role=client&mod=tim_kiem&action=search" class="flex " method="POST">
                        <input type="text" name="tim_kiem" placeholder="Tìm Kiếm Nhanh" class=" bg-[#ededed] border-[#ededed] text-[18px] rounded-[35px] pl-2 outline-transparent" required>
                        <a href="?role=client&mod=tim_kiem&action=search">
                            <buttion class="form__search_btn text-[24px] pr-2 ml-3" type="submit">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </buttion>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</head>