<div class="container mx-auto">
    <div class="flex justify-center mt-[28px]">
        <form action="" class="w-[600px] flex justify-center mb-[190px]" method="POST">
            <div>
                <div class="flex justify-center">
                    <div class="text-center">
                        <span class="text-[32px] font-bold">Thông tin cá nhân</span>
                    </div>
                </div>

                <div class="mt-[48px]">
                    <div class="my-3 font-bold">Họ và tên</div>
                    <input type="text" id="fullname" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="TriChua18">
                    <span id="msg-error-fullname" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Số điện thoại</div>
                    <input type="text" id="phone" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="0385XXXXXX">
                    <span id="msg-error-phone" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Email</div>
                    <input type="text" id="email" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="John.snow@gmail.com">
                    <span id="msg-error-email" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="">
                    <div class="my-3 font-bold">Địa chỉ</div>
                    <input type="text" id="address" class="border border-[#EFA969] w-[400px] py-4 pl-4 rounded-[5px]" placeholder="VD: Hà nội">
                    <span id="msg-error-address" class="flex items-center mt-2 ml-2 text-[#ff4d4f]"></span>
                </div>

                <div class="flex justify-between">
                    <div class="w-[150px] mt-[30px] font-bold p-4 flex bg-[#EFA969] justify-center items-center">
                        <button>Đổi mật khẩu</button>
                    </div>

                    <div class="w-[150px] mt-[30px] font-bold p-4 flex border border-[#EFA969] justify-center items-center">
                        <button onclick="return checkFormInfor()">Lưu</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="../Asset/Javascript/main.js"></script>
</div>