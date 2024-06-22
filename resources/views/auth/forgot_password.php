<div class="self-center">
    <img src="https://img.freepik.com/free-vector/shrug-concept-illustration_114360-8843.jpg?t=st=1719064198~exp=1719067798~hmac=4fb87f0f3902a0836b9d5b758b9ab2876255a248c1fbf631264fa20c508730ca&w=740" width="400" alt="" srcset="">
</div>
<div class="self-center p-5 shadow-md max-w-md w-full">
    <div class="text-center">
        <h2 class="text-xl font-bold">Lupa Password Akun</h2>
        <span class="font-medium mb-4 block">Masukkan email terkait dan password baru untuk setel ulang</span>
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
        <label for="" class="font-semibold text-sm mb-1 block">Password Baru</label>
        <input type="password" name="password" id="" class="border border-gray-400 rounded-sm w-full p-1.5 mb-3" required>
        <label for="" class="font-semibold text-sm mb-1 block">Konfirmasi Password</label>
        <input type="password" name="password" id="" class="border border-gray-400 rounded-sm w-full p-1.5 mb-3" required>
        <button type="submit" class="bg-red-primary w-full p-2 text-white font-bold mb-3 rounded-sm hover:bg-red-500">Konfirmasi</button>
    </form>
    <a href="/login" class="text-sm hover:text-red-primary hover:underline">Kembali</a>
</div>