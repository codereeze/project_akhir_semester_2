<div class="self-center p-5 shadow-md max-w-md w-full">
    <div class="text-center mb-3">
        <h2 class="text-xl font-bold">Register your account</h2>
    </div>
    <form action="" method="post">
        <label for="" class="font-semibold text-sm mb-1 block">Nama</label>
        <input type="text" name="nama" id="" class="border border-gray-400 rounded-sm w-full p-1.5 mb-3" required>
        <label for="" class="font-semibold text-sm mb-1 block">Alamat Email</label>
        <input type="email" name="email" id="" class="border border-gray-400 rounded-sm w-full p-1.5 mb-3" required>
        <label for="" class="font-semibold text-sm mb-1 block">Password</label>
        <input type="password" name="password" id="" class="border border-gray-400 rounded-sm w-full p-1.5 mb-3" required>
        <label for="" class="font-semibold text-sm mb-1 block">Konfirmasi Password</label>
        <input type="password" name="confirm_password" id="" class="border border-gray-400 rounded-sm w-full p-1.5 mb-3" required>
        <div class="flex justify-between mb-3">
            <div class="flex gap-2">
                <input type="checkbox" name="" id="" class="cursor-pointer" required>
                <label for="" class="text-sm font-semibold">Dengan mencentang ini, kami menyetujui <a href="" class="text-red-primary underline">Syarat & Ketentuan</a> kami.</label>
            </div>
        </div>
        <button type="submit" class="bg-red-primary w-full p-2 text-white font-bold mb-3 rounded-sm hover:bg-red-500">Register</button>
    </form>
    <button class="border border-gray-400 rounded-sm hover:bg-red-50 w-full p-2 mb-3">
        <div class="flex items-center justify-center gap-2">
            <img src="https://www.svgrepo.com/show/452216/google.svg" width="18" alt="" srcset="">
            <span class="text-sm font-bold">Register with Google</span>
        </div>
    </button>
    <button class="border border-gray-400 rounded-sm hover:bg-red-50 w-full p-2 font-semibold mb-3">
        <div class="flex items-center justify-center gap-2">
            <img src="https://www.svgrepo.com/show/448224/facebook.svg" width="18" alt="" srcset="">
            <span class="text-sm font-bold">Register with Facebook</span>
        </div>
    </button>
    <a href="/login" class="text-sm hover:text-red-primary hover:underline">Sudah punya akun? Login!</a>
</div>