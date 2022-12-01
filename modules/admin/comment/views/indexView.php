<?php get_header('', 'Bình luận') ?>
<?php
$number = 0;

$productCount = get_count("id", "comments");

if ($productCount != null && count($productCount) > 0) {
   $number = $productCount[0]['numberCount'];
}
$pages = ceil($number / 5);
?>
<!--begin::Subheader-->
<div class=" bg-gray-300 pt-2  ">
    <div class=" container mx-auto  ">
        <div class="bg-white w-5/6 ml-[180px] mt-[-510px]">
            <div class="bg-slate-100 h-[50px] ">
                
                <table>
                    <tr class="text-center h-[55px]">
                        <th class="w-[100px]">ID</th>
                        <th class="w-[650px]">Nội dung</th>
                        <th class="w-[250px]">Thời gian bình luận</th>
                        <th class="w-[200px]">Mã sản phẩm</th>
                        <th class="w-[200px]">Mã khách hàng</th>
                        <th class="w-[200px]">Hành động</th>
                    </tr>
                    <?php foreach ($comment as $row) : ?>

                        <tr class="text-center h-[55px]">
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['content'] ?></td>
                            <td><?= $row['time'] ?></td>
                            <td><?= $row['id_product'] ?></td>
                            <td><?= $row['id_user'] ?></td>
                            <td>

                                <button> <i class="fa-solid fa-pen mr-2"></i></button>
                                <a href="?role=admin&mod=comment&action=delete&id=<?php echo $row['id'] ?>" onclick="return confirm('Bạn chắc chắn muốn xoá danh mục: <?php echo $row['content'] ?> không? Hành động sẽ xoá danh mục và toàn bộ sản phẩm có trong danh mục này.')">
                                    <button><i class="fa-solid fa-trash-can"></i></button>
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <div>
                    <div class="flex mt-5 justify-end mr-5">
                        <div class="pagination">
                            <a class="" href="#">&laquo;</a>
                            <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                <a class="" href="?role=admin&mod=comment&page=<?php echo $i ?>"><?php echo $i ?></a>
                            <?php endfor; ?>
                            <a href="#">&raquo;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>