<?php get_header('', 'Trang chủ') ?>
<?php
$number = 0;

$productCount = get_count("id", "products");

if ($productCount != null && count($productCount) > 0) {
    $number = $productCount[0]['numberCount'];
}
$pages = ceil($number / 8);
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
        <nav aria-label="Page navigation example">
            <ul class="inline-flex items-center -space-x-px">
                <li>
                    <a href="?role=client&mod=home&page=<?php echo $i - 1?>" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                    <li>
                        <a href="?role=client&mod=home&page=<?php echo $i?>" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $i ?></a>
                    </li>
                <?php endfor; ?>
                <li>
                    <a href="?role=client&mod=home&page=<?php echo $i - 1?>" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<script src="/public/js/load_anh.js"></script>
<?php get_footer() ?>