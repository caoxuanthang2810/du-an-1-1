<?php get_header('', 'Trang chủ') ?>
<?php
$number = 0;

$productCount = get_count("id", "products");

if ($productCount != null && count($productCount) > 0) {
    $number = $productCount[0]['numberCount'];
}
$pages = ceil($number / 7);
?>

<div class="container mx-auto mb-6">
    <header>
        <img id="change_image" src="./public/images/container/banner1.png" class="w-full" alt="">
    </header>

    <div class=" flex justify-between mt-[40px] ">

        <div>
            <img src="../Asset/Image/logo/nen-dau-tu-mua-lens-hay-nang-cap-body-may-anh--1 1.png" alt="">
        </div>
        <div>
            <img src="../Asset/Image/logo/images (1) 1.png" alt="">
        </div>
        <div>
            <img src="../Asset/Image/logo/nen-dau-tu-mua-lens-hay-nang-cap-body-may-anh--2 1.png" alt="">
        </div>
    </div>
    <div class="flex justify-between">
        <div>
            <h2 class="mt-[15px] font-bold text-[25px] mb-5">Sản phẩm bán chạy</h2>
        </div>

    </div>


    <div>
        <div class="grid grid-cols-4 gap-24 text-center">
            <?php foreach ($products as $product) : ?>
                <a href="?role=client&mod=chi_tiet&id=<?= $product['id']; ?>&id_cate=<?= $product['id_categories'] ?>">
                    <div class="border-2 border-[#EFA969] rounded-xl p-4 h-[500px]">
                        <div class="h-[300px]">
                            <img src="./public/images/container/<?= $product['img']; ?>" alt="" class="mx-auto mt-3">
                        </div>
                        <div class="h-[80px]">
                            <p class="font-semibold "><?= $product['name'] ?></p>
                        </div>
                        <div>
                            <span class="text-red-500 font-bold "><?= currency_format($product['price']) ?></span>
                        </div>
                        <div class="mt-3 mb-4 h-[100px] ">
                            <button class="border border-[#EFA969] rounded-xl font-bold w-[100px] text-[18px] hover:bg-[#EFA969]  hover:text-white p-1 w-[120px]">Mua Hàng</button>
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>

    <div class="flex mt-5 justify-end mr-5">
        <div class="pagination">
            <a class="" href="#">&laquo;</a>
        <?php for($i = 1;$i <= $pages; $i++):?>
            <a class="" href="?role=client&mod=home&page=<?php echo $i?>"><?php echo $i ?></a>
        <?php endfor; ?>
            <a href="#">&raquo;</a>
        </div>
    </div>
</div>
<script src="/public/js/load_anh.js"></script>
<?php get_footer() ?>