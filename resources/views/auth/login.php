<div class="self-center">
    <img src="https://img.freepik.com/free-vector/sign-concept-illustration_114360-5267.jpg?t=st=1718806418~exp=1718810018~hmac=b65b6b709f7d3ec81cacb521a3676093348e181772a3ba64829862d779c3aea9&w=740" width="400" alt="" srcset="">
</div>
<div class="self-center p-5 shadow-md max-w-md w-full">
    <div class="text-center">
        <h2 class="text-xl font-bold">Login to Application</h2>
        <span class="font-medium mb-4 block">Masukkan data akun kamu untuk melanjutkan</span>
    </div>
    <?php if ($session->indicatorMessage('success')) : ?>
        <div id="alert-1" class="flex items-center p-4 mb-4 text-indigo-800 rounded-lg bg-indigo-100" role="alert">
            <div class="text-sm font-semibold">
                <?= $session->displaySuccessMessage(); ?>
            </div>
        </div>
    <?php elseif ($session->indicatorMessage('error')) : ?>
        <div id="alert-1" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-100" role="alert">
            <div class="text-sm font-semibold">
                <?= $session->displayErrorMessage(); ?>
            </div>
        </div>
    <?php endif; ?>
    <form action="" method="post">
        <label for="" class="font-semibold text-sm mb-1 block">Alamat Email</label>
        <input type="email" name="email" id="" class="border border-gray-400 rounded-sm w-full p-1.5 mb-3" required>
        <label for="" class="font-semibold text-sm mb-1 block">Password</label>
        <input type="password" name="password" id="" class="border border-gray-400 rounded-sm w-full p-1.5 mb-3" required>
        <div class="flex justify-between mb-3 text-sm">
            <div class="flex items-center gap-2">
                <input type="checkbox" class="cursor-pointer" name="" id="">
                <label for="">Ingat saya</label>
            </div>
            <a href="/lupa-password" class="hover:text-red-primary hover:underline">Lupa password?</a>
        </div>
        <button type="submit" class="bg-red-primary w-full p-2 text-white font-bold mb-3 rounded-sm hover:bg-red-500">Login</button>
    </form>
    <form action="" method="post">
        <button type="submit" name="google" value="google" class="border border-gray-400 rounded-sm hover:bg-red-50 w-full p-2 mb-3">
            <div class="flex items-center justify-center gap-2">
                <img src="https://www.svgrepo.com/show/452216/google.svg" width="18" alt="" srcset="">
                <span class="text-sm font-bold">Login with Google</span>
            </div>
        </button>
    </form>
    <form action="" method="post">
        <button type="submit" name="facebook" value="facebook" class="border border-gray-400 rounded-sm hover:bg-red-50 w-full p-2 font-semibold mb-3">
            <div class="flex items-center justify-center gap-2">
                <img src="https://www.svgrepo.com/show/448224/facebook.svg" width="18" alt="" srcset="">
                <span class="text-sm font-bold">Login with Facebook</span>
            </div>
        </button>
    </form>
    <a href="/register" class="text-sm hover:text-red-primary hover:underline">Belum punya akun?</a>
</div>