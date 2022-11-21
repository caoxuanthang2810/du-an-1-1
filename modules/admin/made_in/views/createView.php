<?php get_header('', 'Tạo mới danh mục sản phẩm') ?>

<div class=" container mx-auto pt-2 ">

    <div class="bg-white  ml-[180px] w-5/6 mt-[-510px] ">
        <div class="">
            <span>Mời nhập tên Xuất Sứ</span>
        </div>
        <form action="" method="POST">
            <input type="text" name="name_made_in" placeholder="Nhập tên Xuất Sứ" class="border-2 border-amber-400 pl-2">
            <button type="submit">Thêm mới</button>
        </form>
    </div>
</div>

<?php get_footer() ?>