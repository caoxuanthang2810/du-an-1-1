<?php get_header('', 'Thêm mới bảo hành') ?>

<div class="container mx-auto pt-2 ">

    <div class="bg-white ml-[180px] w-5/6 mt-[-510px] ">
        <div class="bg-white ml-[180px] w-5/6 mt-[-510px] ">
            <div class="">
                <div class="font-bold text-3xl my-[85px] text-center">
                    <h1>Thêm mới bảo hành</h1>
                </div>

                <div class="w-[400px] h-[400px] container mx-auto">
                    <p class="font-semibold text-lg  mb-[20px]">Thời gian bảo hành</p>
                    <form action="" method="POST" class="text-center">
                        <input type="text" name="name_insurance"
                            class="w-[400px] h-[50px] border-2 border-[#EFA969] rounded-md"><br>
                        <button type="submit"
                            class="w-[163px] h-[50px] bg-orange-300 rounded-md text-white	my-[100px]">Thêm
                            mới</button>
                    </form>
                </div>

            </div>
        </div>

        <!-- <div class="">
            <span>Mời nhập loại bảo hành</span>
        </div>
        <form action="" method="POST">
            <input type="text" name="name_insurance" placeholder="Nhập loại bảo hành" class="border-2 border-amber-400 pl-2">
            <button type="submit">Thêm mới</button>
        </form> -->
    </div>
</div>

<?php get_footer() ?>