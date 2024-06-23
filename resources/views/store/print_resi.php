<section class="container mx-auto pl-16 text-gray-600 mb-14">
    <div class="pt-36">
        <div class="flex justify-center mb-5">
            <div class="max-w-2xl w-full p-3 border-2 border-black">
                <div class="flex items-center justify-between mb-1">
                    <div class="flex items-center gap-1">
                        <img src="/assets/logo-resi.png" width="35" alt="" srcset="">
                        <h4 class="text-xl font-bold">Redybag</h4>
                    </div>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/92/New_Logo_JNE.png" width="70" alt="" srcset="">
                </div>
                <hr class="border-t-2 border-dashed border-black mb-2">
                <div class="w-full border-2 border-black mb-2 p-1 text-center font-bold text-sm">No. pesanan: 92834823242</div>
                <div class="flex justify-center mb-2"><?= $params['barcode']('123243423427984832492', 3, 80) ?></div>
                <hr class="border-t-2 border-dashed border-black mb-2">
                <div class="flex justify-between items-center text-sm font-semibold mb-3">
                    <p>Nama penerima: Atyla Azfa Al Harits</p>
                    <p>Pengirim: Al Harits</p>
                </div>
                <div class="flex justify-between items-start text-sm font-semibold mb-5">
                    <p class="max-w-sm">Jl. Raya Banjar - Sidaharja, Rt.14/Rw.04, Tambakreja, Lakbok, Kabupaten Ciamis, Jawa barat, 46385</p>
                    <p>081298897305 <br> Kota Medan</p>
                </div>
                <p class="max-w-sm text-xs text-justify font-semibold mb-5"><b>Catatan untuk kurir:</b> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Alias, asperiores ducimus repudiandae est veniam unde magni inventore aliquid dolorem. Porro!</p>
                <div class="flex justify-between items-start text-sm font-semibold mb-3 gap-2 text-center">
                    <div class="border-2 border-black p-1 text-sm w-full">Kota Tasikmalaya</div>
                    <div class="border-2 border-black p-1 text-sm w-full">Tawang</div>
                </div>
                <div class="flex justify-between items-start text-sm font-medium mb-3 gap-2">
                    <div class="">
                        <p><span class="font-bold">Berat:</span> 500g</p>
                        <p><span class="font-bold">Harga satuan:</span> Rp.20.000 | x10</p>
                        <p><span class="font-bold">Biaya pengriman:</span> 10.000</p>
                        <p><span class="font-bold">Harga total:</span> Rp.200.000</p>
                        <p><span class="font-bold">Pembayaran:</span> DANA</p>
                    </div>
                    <div class="self-center">
                        <p><?= $params['barcode']('123243423427984832492', 1, 40) ?></p>
                        <p>No. pesanan: 92834823242</p>
                    </div>
                </div>
                <hr class="border-t-2 border-dashed border-black mb-2">
                <p class="text-sm"><span class="font-bold">Nama produk:</span> Baju Distro Anime Bocchi The Rock Black Edisi Kessoku Band</p>
            </div>
        </div>
        <div class="flex justify-center">
            <div class="max-w-2xl w-full">
                <button class="p-2 bg-red-primary rounded-md text-white hover:bg-red-500 duration-300 font-semibold w-full">Cetak resi</button>
            </div>
        </div>
    </div>
</section>