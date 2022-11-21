<?php get_header('', 'Tạo mới sản phẩm') ?>


<div class="container mx-auto pt-2 ">

    <div class="bg-white ml-[180px] w-5/6 mt-[-510px] ">


        <form action="" method="POST" enctype="multipart/form-data">
            <div class=" mt-3">
                Tên sản phẩm
                <input type="text" name="name" class="border-2 border-amber-400 pl-2">
            </div>
            <div class=" mt-3">
                Giá
                <input type="text" name="price" class="border-2 border-amber-400 pl-2">
            </div>
            <div class=" mt-3">
                Số lượng
                <input type="text" name="quantily" class="border-2 border-amber-400 pl-2">
            </div>
            <div class=" mt-3">
                <span class="block">Ảnh sản phẩm</span>
                <input type="file" name="image">
            </div>
            <div class=" mt-3">
                Mô tả sản phẩm
                <input type="text" name="description" class="border-2 border-amber-400 pl-2">
            </div>
            <div class=" mt-3">
                Thời gian bảo hành
                <input type="text" name="insurance" class="border-2 border-amber-400 pl-2">
            </div>
            <div class=" mt-3">
                Xuất xứ
                <input type="text" name="made_in" class="border-2 border-amber-400 pl-2">
            </div>
            <div class=" mt-3">
                Danh mục
                <input type="text" name="id_categories" class="border-2 border-amber-400 pl-2">
            </div>


            <button type="submit" class="w-[150px] h-[50px] bg-amber-400  ml-[20px] rounded-[5px] text-center mt-5">Thêm mới</button>
        </form>
    </div>
</div>

<?php get_footer() ?>

