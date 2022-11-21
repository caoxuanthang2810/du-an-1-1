<?php get_header('', 'Chỉnh sửa sản phẩm') ?>
<form action="" method="POST">
        <label for="">
            Tên thành viên
            <input type="text" name="name" value="<?php echo $users['username'] ?>">
        </label>

        <label for="">
            Mật khẩu
            <input type="password" name="password" value="<?php echo $users['password'] ?>">
        </label>

        <label for="">
            Email
            <input type="email" name="email" value="<?php echo $users['email'] ?>">
        </label>

        <label for="">
            Số điện thoại
            <input type="text" name="phone" value="<?php echo $users['phone'] ?>">
        </label>

        <label for="">
            Địa chỉ
            <input type="text" name="address" value="<?php echo $users['address'] ?>">
        </label>

        <label for="">
        <label>Vai trò</label>
         <select class="form-control select2" name="id_role">
             <?php foreach ($role as $item) : ?>
                 <option value="<?php echo $item['id_role'] ?>"><?php echo $item['name_role'] ?></option>
             <?php endforeach ?>
         </select>
        </label>


        <div>
           <a href="?role=admin&mod=products&action=create">Thêm mới</a>
        </div>
    </form>
<?php get_footer() ?>