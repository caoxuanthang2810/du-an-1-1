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
                    <input type="text" id="email" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow@gmail.com">
                    <span id="msg-error-email" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Tên tài khoản</div>
                    <input type="text" id="userName" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow">
                    <span id="msg-error-username" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Mật khẩu</div>
                    <input type="text" id="password" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="*********">
                    <span id="msg-error-pass" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                    <span id="msg-error-re-pass-same-1" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Nhập lại mật khẩu</div>
                    <input type="text" id="passwordcheck" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="*********">
                    <span id="msg-error-re-pass" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                    <span id="msg-error-re-pass-same-2" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="w-[400px] mt-[30px] font-bold p-4 flex bg-[#EFA969] justify-center items-center">
                    <button onclick="return checkFormRegister()">Đăng ký</button>
                </div>
            </div>
        </form>
    </div>
    <script src="../Asset/Javascript/main.js"></script>
</div>