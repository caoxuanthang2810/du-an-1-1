<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $TITLE_NAME ?></title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../Asset/Css/base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Asset/Javascript/main.js"></script>
</head>

<body>
    <div class="bg-gray-300  h-[900px]">
        <div class="h-[50px] flex justify-between bg-[#F29D38] leading-[50px]">
            <div class="ml-[250px]">
                <a href="">
                    <i class="fa-solid fa-arrow-left text-white"></i>
                    <span class="text-white font-bold">TRANG CHỦ</span>
                </a>
            </div>
            <div class="mr-10">
                <a href="">
                    <i class="fa-solid fa-arrow-right-to-bracket text-white"></i>
                    <span class="text-white font-bold">ĐĂNG XUẤT</span>
                </a>
            </div>

        </div>
        <div class="flex ">
            <div class="w-[250px]  bg-white">
                <div class="border-b-2 border-gray-300">
                    <img src="../Asset//Image//logo//—Pngtree—golden leaf camera photography logo_8535019 4.png" alt="" class="w-[200px] h-[140px]">
                </div>
                <div class="">
                    <p class="h-[30px] mt-5"><a href="" class="text-lg ml-4 text-medium text-black hover:text-[#EFA969]">Trang Chủ</a></p>
                    <p class="h-[30px] mt-5"><a href="" class="text-lg ml-4 text-medium text-black hover:text-[#EFA969]">Quản Lý Tài Khoản</a></p>
                    <p class="h-[30px] mt-5"><a href="" class="text-lg ml-4 text-medium text-black hover:text-[#EFA969]">Quản Lý Sản Phẩm</a></p>
                    <p class="h-[30px] mt-5"><a href="" class="text-lg ml-4 text-medium text-black hover:text-[#EFA969]">Quản Lý Bình Luận</a></p>
                    <p class="h-[30px] mt-5"><a href="" class="text-lg ml-4 text-medium text-black hover:text-[#EFA969]">Quản Lý Danh Mục</a></p>
                    <p class="h-[30px] mt-5"><a href="" class="text-lg ml-4 text-medium text-black hover:text-[#EFA969]">Bảo Hành</a></p>
                    <p class="h-[30px] mt-5"><a href="" class="text-lg ml-4 text-medium text-black hover:text-[#EFA969]">Chức Vụ</a></p>
                    <p class="h-[30px] mt-5"><a href="" class="text-lg ml-4 text-medium text-black hover:text-[#EFA969]">Xuất Xứ</a></p>
                          
                    
                </div>
            </div>
            <div class="w-full">
                <main>
                    <?php include_once $VIEW_NAME ?>
                </main>
            </div>
        </div>
    </div>

</body>

</html>