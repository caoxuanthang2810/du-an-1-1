<?php get_header('', 'Chức vụ') ?>
<?php
$number = 0;

$productCount = get_count("id", "bills");

if ($productCount != null && count($productCount) > 0) {
    $number = $productCount[0]['numberCount'];
}
$pages = ceil($number / 6);
?>

<!--begin::Subheader-->
<div class="bg-gray-300 pt-2">
    <div class=" container mx-auto  ">
        <div class="ml-[180px] w-5/6 mt-[-510px]">
            <div class="bg-slate-100 h-[50px] ">

                <table>
                    <tr class="text-center h-[55px]">
                        <th class="w-[250px]">Mã hóa đơn</th>

                        <th class="w-[1050px]">Thời gian mua</th>

                        <th class="w-[100px]">Tài khoản</th>

                        <th class="w-[1250px]">Trạng thái đơn hàng</th>

                        <th class="w-[1000px]">Giá</th>

                        <th class="w-[1000px]">Code</th>
                        <th class="w-[450px]">Hành động</th>


                    </tr>

                    <?php foreach ($bills as $key) :
                        extract($key)
                    ?>
                        <tr class="text-center h-[55px]">
                            <td><?= $id ?></td>
                            <td><?= $time ?></td>
                            <td><?= $fullname ?></td>
                            <td><?= $name_status ?></td>
                            <td><?= $price ?></td>
                            <td><?= $code ?></td>
                            <td>
                                <a href="?role=admin&mod=chi_tiet_hoa_don&code=<?= $key['code'] ?> ">
                                    <button ><i class="fa-solid fa-list-ul"></i></button>
                                </a>
                                <a href="?role=admin&mod=bills&action=update&id=<?= $id ?>">
                                    <button class="ml-3"> <i class="fa-solid fa-pen mr-2"></i></button>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <div class="flex mt-5 justify-end mr-5">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="?role=admin&mod=bills&page=<?php echo $i - 1 ?>" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Previous</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                <li>
                                    <a href="?role=admin&mod=bills&page=<?php echo $i ?>" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"><?php echo $i ?></a>
                                </li>
                            <?php endfor; ?>
                            <li>
                                <a href="?role=admin&mod=bills&page=<?php echo $i - 1 ?>" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    <span class="sr-only">Next</span>
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>