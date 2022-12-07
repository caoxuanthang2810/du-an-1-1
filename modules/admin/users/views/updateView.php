<?php get_header('', 'Chỉnh sửa tài khoản') ?>

<div class=" container mx-auto pt-2 ">
    <div class="bg-white ml-[180px] w-5/6 mt-[-510px]">
        <div class="font-bold text-3xl my-[85px] text-center">
            <h1>Cập nhật tài khoản</h1>
        </div>
        <form action="" method="POST" enctype="multipart/form-data " class="ml-[350px]">
            <div class=" mt-3">
                Chức vụ:

                <select name="id_role" id="">
                           <?php foreach ($role as $value): ?>
                              <option value="<?= $value['id_role'] ?>"><?php echo $value['name_role']; ?></option>
                           <?php endforeach; ?>
                        </select>
            </div>
            <div class="text-center">
                <button type="submit" class="w-[163px] h-[50px] bg-orange-300 rounded-md text-white	my-[50px] ">Cập nhật</button>
            </div>
        </form>
    </div>
</div>
<?php get_footer() ?>