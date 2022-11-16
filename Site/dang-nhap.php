<div class="container mx-auto">
    <div class="flex justify-center mt-[28px]">
        <form action="" class="w-[600px] flex justify-center mb-[190px]" method="POST">
            <div>
                <div class="flex justify-center">
                    <div class="text-center">
                        <h1 class="text-[16px] font-bold">Chào mừng</h1>
                        <span class="text-[32px] font-bold">Đăng nhập tài khoản</span>
                    </div>
                </div>

                <div class="mt-[48px]">
                    <div class="my-3 font-bold">Email</div>
                    <input type="text" id="email" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow@gmail.com">
                    <span id="msg-error-email" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Mật khẩu</div>
                    <input type="text" id="password" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="*********">
                    <span id="msg-error-pass" class="flex items-center mt-1 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="w-[400px] mt-[30px] font-bold text-white p-4 flex bg-[#EFA969] justify-center items-center">
                    <button onclick="return checkFormLogin()">Đăng nhập</button>
                </div>

                <div class="mt-12">
                    <div class="flex justify-center text-[18px]">
                        <span class="text-[#616161] mr-1">Bạn chưa có tài khoản?</span> <a href="./index.php?dang-nhap" class="text-[#EFA969]">Đăng ký ngay</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>