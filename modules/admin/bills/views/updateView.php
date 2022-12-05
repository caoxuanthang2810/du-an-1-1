<?php get_header('', 'Chỉnh sửa danh mục sản phẩm') ?>

<div class=" container mx-auto pt-2 ">
    <div class="bg-white ml-[180px] w-5/6 mt-[-510px] ">
        <div class="">
            <div class="font-bold text-3xl my-[10px] text-center">
                <h1>Sửa chức vụ</h1>
            </div>

            <div class="w-[400px] h-[400px] container mx-auto">
                <form action="" method="POST" class="text-center">
                    <div class="hidden mt-3">
                        Tên tài khoản:
                        <input type="text" name="time" value="<?= $bills['time'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[40px]">
                    </div>

                    <div class="hidden mt-3">
                        Tên tài khoản:
                        <input type="text" name="id_user" value="<?= $bills['id_user'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[40px]">
                    </div>

                    <div class="hidden mt-3">
                        Tên tài khoản:
                        <input type="text" name="price" value="<?= $bills['price'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[40px]">
                    </div>

                    <div class="hidden mt-3">
                        Tên tài khoản:
                        <input type="text" name="code" value="<?= $bills['code'] ?>" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[40px]">
                    </div>

                    <div class=" mt-3">
                        Chức vụ:

                        <select name="status" id="">
                            <?php foreach ($role as $value) : ?>
                                <option value="<?= $value['id_role'] ?>"><?php echo $value['name_role']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="w-[163px] h-[50px] bg-orange-300 rounded-md text-white	my-[100px]">Thêm mới</button>
                </form>
            </div>

        </div>
    </div>
</div>
<?php get_footer() ?>