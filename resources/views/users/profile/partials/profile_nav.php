<div class="self-start max-w-sm w-full border shadow-md rounded-md p-4">
    <a href="/profile" class="<?= $_SERVER['PATH_INFO'] == '/profile' ? 'bg-red-primary hover:bg-red-500 text-white' : 'hover:bg-red-500 hover:text-white' ?> block mb-2 p-2 rounded-md w-full cursor-pointer font-semibold">
        Profile saya
    </a>
    <a href="/atur_alamat" class="<?= $_SERVER['PATH_INFO'] == '/atur_alamat' || str_contains($_SERVER['REQUEST_URI'], '/edit-alamat') ? 'bg-red-primary hover:bg-red-500 text-white' : 'hover:bg-red-500 hover:text-white' ?> block mb-2 p-2 rounded-md w-full cursor-pointer font-semibold">
        Atur alamat
    </a>
    <a href="/ganti_password" class="<?= $_SERVER['PATH_INFO'] == '/ganti_password' ? 'bg-red-primary hover:bg-red-500 text-white' : 'hover:bg-red-500 hover:text-white' ?> block mb-2 p-2 rounded-md w-full cursor-pointer font-semibold">
        Ganti password
    </a>
</div>