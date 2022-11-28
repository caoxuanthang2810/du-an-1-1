<?php get_header('', 'Giỏ hàng') ?>
<div class="container mx-auto mb-6 mt-[60px]">
    <?php if (isset($cart)) { ?>
        <form action="" method="POST">

            <table class="w-full ">
                <tr class="bg-[#FAFAFA]">
                    <th class="">Mã sản phẩm</th>
                    <th class="w-1/4">Tên sản phẩm</th>
                    <th class="">Giá tiền</th>
                    <th class="">Số lượng</th>
                    <th class="">Thành tiền</th>
                    <th></th>
                </tr>

                <?php foreach ($cart['buy'] as $item) : ?>
                    <tr class="text-center">
                        <th><?= $item['id']; ?></th>
                        <th><?= $item['name'] ?></th>
                        <th><?= $item['price'] ?></th>
                        <td><input type="number" min="1" max="30" name="qty[<?php echo $item['id'] ?>]" value="<?php echo $item['qty'] ?>"></td>
                        <th><?php echo $item['sub_total'] ?></th>
                        <th>
                            <a href="?role=client&mod=gio_hang&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xoá Sản phẩm: <?= $item['name'] ?> không? Hành động sẽ xoá danh mục và toàn bộ sản phẩm có trong danh mục này.')" class="fa-solid fa-trash-can"></a>

                        </th>


                    </tr>
                <?php endforeach ?>
            </table>
            <input type="submit" id="update_cart" class=" border border-[#EFA969] rounded-xl  mt-[80px] font-bold p-4 text-center hover:bg-[#EFA969]" name="btn_update" value="Cập nhật giỏ hàng">
        </form>
        <?php
    } else {
        echo "Không co phan tu nao trong gio hang";
    }
    ?>
    
            <h1 class="font-bold text-[20px] float-right">Tổng tiền: <?= currency_format($total); ?> </h1>
        

    <div class="w-[300px] mx-auto">
        <h2 class="border border-[#EFA969] rounded-xl  mt-[60px] font-bold p-4 text-center hover:bg-[#EFA969] ">Thanh toán</h2>
    </div>
</div>
<?php get_footer() ?>