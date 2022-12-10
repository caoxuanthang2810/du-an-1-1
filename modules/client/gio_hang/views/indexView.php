<?php get_header('', 'Giỏ hàng') ?>
<div class="container mx-auto mb-6 mt-[60px]">
    <?php if (isset($_SESSION['cart']['buy'])) { ?>
        <form action="" method="POST">

            <table class="w-full ">
                <tr class="bg-[#FAFAFA]">
                    <th class="">Mã sản phẩm</th>
                    <th class="w-1/4">Tên sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th class="">Giá tiền</th>
                    <th class="">Số lượng</th>
                    <th class="">Thành tiền</th>
                    <th></th>
                </tr>

                <?php foreach ($cart['buy'] as $item) : ?>
                    <tr class="text-center">
                        <th><?= $item['id']; ?></th>
                        <th><?= $item['name'] ?></th>
                        <th class="w-[200px]"><img src="./public/images/container/<?= $item['img'] ?>" alt="" class="mx-auto w-2/3"></th>
                        <th><?= currency_format($item['price']) ?></th>
                        <td><input type="number" min="1" max="<?= $item['quantily'] ?>" name="qty[<?php echo $item['id'] ?>]" value="<?php echo $item['qty'] ?>"></td>
                        <th><?= currency_format($item['sub_total']) ?></th>
                        <th>
                            <a href="?role=client&mod=gio_hang&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xoá Sản phẩm: <?= $item['name'] ?> không? Hành động sẽ xoá danh mục và toàn bộ sản phẩm có trong danh mục này.')" class="fa-solid fa-trash-can"></a>

                        </th>


                    </tr>
                <?php endforeach ?>
            </table>
            <input type="submit" id="update_cart" class=" border border-[#EFA969] rounded-xl  mt-[80px] font-bold p-4 text-center hover:bg-[#EFA969]" name="btn_update" value="Cập nhật giỏ hàng">
        </form>

        <h1 class="font-bold text-[20px] float-right">Tổng tiền: <?= currency_format($total); ?> </h1>

        <a href="?role=client&mod=bills">

            <div class="w-[300px] mx-auto">
                <h2 class="border border-[#EFA969] rounded-xl  mt-[60px] font-bold p-4 text-center hover:bg-[#EFA969] ">Thanh toán</h2>
            </div>
        </a>
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