<?php get_header('', 'Tạo mới sản phẩm') ?>



    <form action="" method="POST">
        <label for="">
            Tên sản phẩm
            <input type="text" name="name">
        </label>

        <label for="">
            Giá
            <input type="text" name="price">
        </label>

        <label for="">
            Số lượng
            <input type="text" name="quanlity">
        </label>

        <label for="">
            Ảnh sản phẩm
            <input type="file" name="image">
        </label>

        <label for="">
        <label>Bảo hành</label>
         <select class="form-control select2" name="insurance">
             <?php foreach ($products as $insu) : ?>
                 <option value="<?php echo $insu['id'] ?>"><?php echo $insu['name_insurance'] ?></option>
             <?php endforeach ?>
         </select>
        </label>

        <label for="">
        <label>Xuất xứ</label>
         <select class="form-control select2" name="made_in">
             <?php foreach ($products as $made) : ?>
                 <option value="<?php echo $made['id'] ?>"><?php echo $made['name_made_in'] ?></option>
             <?php endforeach ?>
         </select>
        </label>

        <label for="">
             <label>Danh mục sản phẩm</label>
            <select class="form-control select2" name="category_id">
                <?php foreach ($products as $category) : ?>
                    <option value="<?php echo $category['id'] ?>"><?php echo $category['name_cate'] ?></option>
                <?php endforeach ?>
            </select>
        </label>

        <div>
           <a href="?role=admin&mod=products&action=create"> <button name="btn_create">Thêm mới</button></a>
        </div>
    </form>

<?php get_footer() ?>