<?php get_header('', 'Chỉnh sửa sản phẩm') ?>

<div class=" container mx-auto pt-2 ">
<div class="bg-white ml-[180px] w-5/6 mt-[-510px]">
        <div class="font-bold text-3xl my-[85px] text-center">
            <h1>Cập nhật sản phẩm</h1>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="ml-[350px]">

            <div class=" mt-3">
                Tên sản phẩm:
                <input type="text" name="name" value="<?= $products['name'] ?>"
                    class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[40px]">
            </div>
            <div class=" mt-3">
                Giá:
                <input type="text" name="price" value="<?= $products['price'] ?>"
                    class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[115px]">
            </div>
            <div class=" mt-3">
                Số lượng:
                <input type="text" name="quantily" value="<?= $products['quantily'] ?>"
                    class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[75px]">
            </div>
            <div class=" mt-3">
                Mô tả sản phẩm:
                <input type="text" name="description" value="<?= $products['description'] ?>"
                    class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[25px]">
            </div>
            <div class=" mt-3">
                Thời gian bảo hành:
                <input type="text" name="insurance" value="<?= $products['insurance'] ?>"
                    class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[5px]">
            </div>
            <div class=" mt-3">
                Xuất xứ:
                <input type="text" name="made_in" value="<?= $products['made_in'] ?>"
                    class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[88px]">
            </div>
            <div class=" mt-3">
                Danh mục:
                <input type="text" name="id_categories" value="<?= $products['id_categories'] ?>"
                    class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[70px]">
            </div>
            <div class=" mt-5">
                <span class="mr-[50px]">Ảnh sản phẩm</span>
                <input type="file" name="img">
            </div>
            <div class="text-center">
                <button type="submit" class="w-[163px] h-[50px] bg-orange-300 rounded-md text-white	my-[50px] ">Thêm mới</button>
            </div>
        </form>
    </div>
</div>
<?php get_footer() ?>