<?php get_header('', 'Tạo mới sản phẩm') ?>


<div class="container mx-auto pt-2 ">

    <div class="bg-white ml-[180px] w-5/6 mt-[-510px]">
        <div class="font-bold text-3xl my-[85px] text-center">
            <h1>Thêm mới sản phẩm</h1>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" class="ml-[350px]">

            <div class=" mt-3">
                Tên sản phẩm:
                <input type="text" name="name" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[40px]">
            </div>
            <div class=" mt-3">
                Giá:
                <input type="text" name="price" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[115px]">
            </div>
            <div class=" mt-3">
                Số lượng:
                <input type="text" name="quantily" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[75px]">
            </div>
            
            <div class=" mt-3">
                Thời gian bảo hành:
                <select name="insurance" id="">
                           <?php foreach ($insurance as $value) { ?>
                              <option value="<?= $value['id'] ?>"><?php echo $value['name_insurance']; ?></option>
                           <?php
                           }
                           ?>
                        </select>
                <!-- <input type="text" name="insurance" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[5px]"> -->
            </div>
            <div class=" mt-3">
                Xuất xứ:
                <select name="made_in" id="">
                           <?php foreach ($madein as $value) { ?>
                              <option value="<?= $value['id'] ?>"><?php echo $value['name_made_in']; ?></option>
                           <?php
                           }
                           ?>
                        </select>
                <!-- <input type="text" name="made_in" class="pl-2 w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md ml-[88px]"> -->
            </div>
            <div class=" mt-3">
            Danh Mục:
                        <select name="id_categories" id="">
                           <?php foreach ($categories as $value) { ?>
                              <option value="<?= $value['id'] ?>"><?php echo $value['name_cate']; ?></option>
                           <?php
                           }
                           ?>
                        </select>
                
            </div>
            <div class=" mt-5">
                <span class="mr-[50px]">Ảnh sản phẩm</span>
                <input type="file" name="img">
            </div>
            <div class=" mt-3">
                Mô tả sản phẩm:
                <textarea name="description" id="" cols="30" rows="5" value="<?= $products['description'] ?>" class="pl-2 w-[400px] border-2 border-[#EFA969] rounded-md ml-[25px]"></textarea>

            </div>
            <div class="text-center">
                <button type="submit" class="w-[163px] h-[50px] bg-orange-300 rounded-md text-white	my-[50px] ">Thêm mới</button>
            </div>
        </form>
    </div>
</div>
<?php get_footer() ?>