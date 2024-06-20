<section class="container mx-auto px-12 text-gray-600">
    <div class="pt-36">
        <div class="border rounded-md p-6 shadow-sm mb-7">
            <h1 class="text-2xl mb-4 font-bold block">Chat Penjual</h1>
            <div class="flex gap-5 h-72">
                <div class="overflow-y-scroll p-3 border rounded-md max-w-xs w-full">
                    <button class="border rounded-md p-3 mr-5 mb-3 block w-auto">
                        <div class="flex items-center gap-3">
                            <img src="https://avatars.githubusercontent.com/u/159593076?v=4" width="40" alt="" srcset="" class="rounded-full">
                            <h2 class="font-semibold text-base block text-start">Toko Bocchi The Rock</h2>
                        </div>
                    </button>
                </div>
                <div class="overflow-y-scroll p-3 border rounded-md w-full pt-7">
                    <div class="flex justify-end mb-5">
                        <div class="flex items-start gap-2.5">
                            <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" data-dropdown-placement="bottom-start" class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50" type="button">
                                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                </svg>
                            </button>
                            <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex flex-col gap-1 w-full max-w-[320px]">
                                <div class="flex justify-end items-center space-x-2 rtl:space-x-reverse text-end">
                                    <span class="text-sm font-normal text-gray-500">11:46</span>
                                    <span class="text-sm font-semibold text-gray-900">Bonnie Green</span>
                                </div>
                                <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-xl">
                                    <p class="text-sm font-normal text-gray-900"> That's awesome. I think our users will really appreciate the improvements.</p>
                                </div>
                                <span class="text-sm text-end font-normal text-gray-500">Delivered</span>
                            </div>
                            <img class="w-8 h-8 rounded-full" src="https://avatars.githubusercontent.com/u/159593076?v=4">
                        </div>
                    </div>
                    <div class="flex justify-start mb-5">
                        <div class="flex justify-end">
                            <div class="flex items-start gap-2.5">
                                <img class="w-8 h-8 rounded-full" src="https://avatars.githubusercontent.com/u/159593076?v=4">
                                <div class="flex flex-col gap-1 w-full max-w-[320px]">
                                    <div class="flex items-center space-x-2 rtl:space-x-reverse">
                                        <span class="text-sm font-semibold text-gray-900">Bonnie Green</span>
                                        <span class="text-sm font-normal text-gray-500">11:46</span>
                                    </div>
                                    <div class="flex flex-col leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-xl">
                                        <p class="text-sm font-normal text-gray-900"> That's awesome. I think our users will really appreciate the improvements.</p>
                                    </div>
                                    <span class="text-sm font-normal text-gray-500">Delivered</span>
                                </div>
                                <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots" data-dropdown-placement="bottom-start" class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50" type="button">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                        <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                                    </svg>
                                </button>
                                <div id="dropdownDots" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40">
                                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownMenuIconButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Delete</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-7">
                <form class="w-full" method="post">
                    <div class="relative">
                        <input type="text" name="pesan" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50" placeholder="Tulis pesan Anda disini..." required />
                        <button type="submit" class="text-white absolute end-2.5 bottom-1 bg-red-primary hover:bg-red-800 focus:ring-4 focus:outline-none font-medium rounded-full text-sm px-4 py-3"><i class="fas fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>