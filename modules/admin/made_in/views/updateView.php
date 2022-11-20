<?php get_header('', 'Chỉnh sửa danh mục sản phẩm') ?>
<div class=" container mx-auto pt-2 ">

    <div class="bg-white  ml-[180px] w-5/6 mt-[-510px] ">
        <div class="">
            <span>Mời nhập tên Xuất sứ</span>
        </div>
        <form action="" method="POST">
        <input type="text" name="name_made_in" placeholder="Nhập tên xuất sứ" class="border-2 border-amber-400 pl-2" value="<?php echo $made_in['name_made_in'] ?>">
        <button type="submit">Sửa</button>
        </form>
    </div>
</div>
<?php get_footer() ?>