<section class="my-16">
    <div class="bg-primary">
        <div class="container py-4 flex justify-between items-center">
            <div>
                <!-- UPPER -->
                <div class="flex text-gray-400">
                    <a class="mr-4 text-grey-500 relative after:content-[''] after:absolute after:top-1/4 after:-right-2 after:w-px after:px-px after:h-4 after:bg-gray-500 after:block"
                        href="#">Home</a>
                    <p class="text-white"> Contact</p>
                </div>
                <!-- LOWER -->
                <div>
                    <h1 class="text-h1 text-white font-bold">Account Detail</h1>
                </div>
            </div>
            <!-- IMG -->
            <div class="w-2/12">
                <img src="./Uploads/cucShit.png" alt="">
            </div>
        </div>
    </div>
</section>
<div>
    <div>
        <div class="container grid grid-cols-2 bg-detail">
            <div class="flex items-center justify-center p-16">
                <form class="h-fit w-fit" action="index.php?pg=adduser" method="post" onsubmit="return validateForm()">
                    <div
                        class="py-12 px-16 h-fit w-fit flex flex-col gap-2 bg-detail border rounded-lg border-white shadow-primary">
                        <div class="images"> <img class="w-6/12" src="./Uploads/logo.png" alt="" /></div>
                        <h1 class="text-h1 color-primary font-bold">ĐĂNG KÍ</h1>
                        <label class="flex flex-col gap-2" for="username"><span class="text-small">Username</span>
                            <input
                                class="bg-white w-80 border border-slate-300 rounded-md py-2 pl-6 pr-6 shadow-sm .focus:outline-none.focus:border-sky-500.focus:ring-sky-500.focus:ring-1.sm:text-sm"
                                type="text" id="username" name="username" placeholder="Username" />
                        </label>
                        <label class="flex flex-col gap-2" for="email"><span class="text-small">Email</span>
                            <input
                                class="bg-white w-80 border border-slate-300 rounded-md py-2 pl-6 pr-6 shadow-sm .focus:outline-none.focus:border-sky-500.focus:ring-sky-500.focus:ring-1.sm:text-sm"
                                type="email" id="email" name="email" placeholder="Email" required />
                        </label>
                        <label class="flex flex-col gap-2" for="password"><span class="text-small">Password</span>
                            <div
                                class="input-field bg-white w-80 border border-slate-300 rounded-md py-2 pl-6 pr-6 shadow-sm flex items-center justify-between">
                                <input type="password" name="passworddemo" placeholder="Password" id="passwordInput" />
                                <ion-icon name="eye-outline" id="togglePassword"></ion-icon>
                            </div>
                        </label>
                        <label class="flex flex-col gap-2 pb-4" for="ForgotPassword"><span class="text-small">Forgot
                                Password</span>
                            <div
                                class="input-field bg-white w-80 border border-slate-300 rounded-md py-2 pl-6 pr-6 shadow-sm flex items-center justify-between">
                                <input type="password" name="ForgotPassword" placeholder="ForgotPassword"
                                    id="forgotPasswordInput" />
                                <ion-icon name="eye-outline" id="togglePassword"></ion-icon>
                            </div>
                        </label>
                        <input type="submit" name="dangky"
                            class="bg-primary py-2 rounded-lg font-bold w-100 inline-block px-8 text-white text-center transition duration border-hover hover:bg-detail hover:text-primary"
                            value="Đăng ký">
                        <a class="text-center text-sky-600 font-semibold pt-2" href="index.php?pg=signin">Đăng nhập</a>
                    </div>
                </form>
            </div>
            <div class="flex items-center justify-center">
                <div class="images">
                    <div class="images-item"><img src="./Uploads/thaytu.png" alt="alt" /></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER-->
<div class="pt-20">
    <div class="container banner-container p-16">
        <div>
            <!-- UPPER-->
            <div class="text-white flex items-center gap-3 font-bold">
                <div class="w-12 rounded-full flex items-center justify-center h-12 bg-primary text-white"><i
                        class="fa-solid fa-envelope text-xl"></i></div>
                <p>Newsletter</p>
            </div>
            <h1 class="text-primary text-h1 font-bold">Get weekly update</h1>
            <!-- LOWER-->
            <div class="mt-4 flex gap-2">
                <div class="flex flex-center gap-3 bg-white w-fit px-6 py-3 rounded-button"><i
                        class="fa-solid fa-envelope text-xl"></i>
                    <input type="text" placeholder="example@gmail.com" />
                </div>
                <div class="w-fit px-6 py-4 bg-primary text-white rounded-button">Subcribe</div>
            </div>
        </div>
    </div>
</div>
<script>
function validateForm() {
    var passworddemo = document.getElementById("passwordInput").value;
    var forgotPassword = document.getElementById("forgotPasswordInput").value;

    if (passworddemo !== forgotPassword) {
        alert("Password and Forgot Password must match");
        return false;
    }

    return true;
}
</script>