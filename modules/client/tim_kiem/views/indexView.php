<?php get_header('', 'Tìm kiếm') ?>
<div class="container mx-auto mb-6">
    <h2 class="font-bold text-[25px] text-center my-9">Sản phẩm tìm kiếm</h2>
    <div>
        <div class="grid grid-cols-4 gap-24 text-center">
            <?php foreach ($products as $product) : ?>
                <a href="?role=client&mod=chi_tiet&id=<?= $product['id']; ?>">
                    <div class="border-2 border-[#EFA969] rounded-xl p-4" id="anh">
                        <div>
                            <img src="./public/images/container/<?= $product['img']; ?>" alt="" class="mx-auto mt-3 w-5/6">
                        </div>
                        <div>
                            <p class="font-semibold mt-2 mb-1 p-3"><?= $product['name'] ?></p>
                        </div>
                        <div>
                            <span class="text-red-500 font-bold "><?= $product['price'] ?> VNĐ</span>
                        </div>
                        <div class="mt-3 mb-4">
                            <button class="border border-[#EFA969] rounded-xl font-bold w-[100px] text-[18px] hover:bg-[#EFA969]  hover:text-white p-1">Mua Hàng</button>
                        </div>
                    </div>
                </a>
            <?php endforeach ;?>
        </div>

    </div>
    
</div>

<?php get_footer() ?>