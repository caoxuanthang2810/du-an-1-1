<?php get_header('', 'Đăng ký') ?>

<div class="container mx-auto">
    <div class="flex justify-center mt-[28px]">
        <form action="" class="w-[600px] flex justify-center mb-[190px]" method="POST">
            <div>
                <div class="flex justify-center">
                    <div class="text-center">
                        <span class="text-[32px] font-bold">Tạo tài khoản</span>
                    </div>
                </div>

                <div class="mt-[48px]">
                    <div class="my-3 font-bold">Email</div>
                    <input type="text" name="email" id="email" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow@gmail.com">
                    <span id="msg-error-email" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Họ và tên</div>
                    <input type="text" name="fullname" id="fullname" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow">
                    <span id="msg-error-fullname" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Mật khẩu</div>
                    <input type="password" name="password" id="password" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="*********">
                    <span id="msg-error-pass" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                    <span id="msg-error-re-pass-same-1" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Nhập lại mật khẩu</div>
                    <input type="password" id="passwordcheck" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="*********">
                    <span id="msg-error-re-pass" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                    <span id="msg-error-re-pass-same-2" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Số điện thoại</div>
                    <input type="text" name="phone" id="phone" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow">
                    <span id="msg-error-phone" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Địa chỉ</div>
                    <input type="text" name="address" id="address" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow">
                    <span id="msg-error-address" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="w-[400px] mt-[30px] font-bold p-4 flex bg-[#EFA969] justify-center items-center">
                    <button onclick="return checkFormRegister()">Đăng ký</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../Asset/Javascript/main.js"></script>
</div>
<?php get_footer() ?>