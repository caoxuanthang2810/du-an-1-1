<?php get_header('', 'Danh mục') ?>

    <!--begin::Subheader-->
    <div class=" mx-[40px] ">

        <form action="" class="flex my-[20px] justify-between">
            <div>
            </div>
            <div>
                <div class="">
                    <button class="w-[163px] h-[50px] bg-amber-400 text-white ml-[20px] rounded-[5px] ">Thêm mới</button>
                </div>
            </div>
        </form>


        <div class="bg-white h-[676px]">
            <div class="bg-slate-100 h-[50px] ">
                <table>
                    <tr class="text-center h-[55px]">
                        <th class="w-[100px]">ID</th>
                        <th class="w-[1250px]">Tên danh mục</th>
                        <th class="w-[200px]">Hành động</th>

                    </tr>

                    <tr class="text-center h-[55px]">
                        <td>1</td>
                        <td>TriChua18</td>
                        <td><button> <i class="fa-solid fa-pen mr-2"></i></button>
                            <button><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>


                </table>
            </div>
        </div>
    </div>
<?php get_footer() ?>