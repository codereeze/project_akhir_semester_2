// JavaScript untuk halaman atur alamat

let slide1 = document.getElementById('slide1');
let slide2 = document.getElementById('slide2');
let slideDisplay1 = document.getElementById('slide-display1');
let slideDisplay2 = document.getElementById('slide-display2');

slide1.addEventListener("click", function () {
    slide1.classList.add(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slide2.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slideDisplay2.classList.add("hidden");
    slideDisplay1.classList.remove("hidden");
});
  
slide2.addEventListener("click", function () {
    slide2.classList.add(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slide1.classList.remove(
        "text-red-primary",
        "border-b-2",
        "border-red-primary",
        "pb-1"
    );
    slideDisplay1.classList.add("hidden");
    slideDisplay2.classList.remove("hidden");
});



// JavaScript untuk halaman pendaftaran seller

let info_seller = document.getElementById('information-seller');
let info_store = document.getElementById('information-store');
let upload_document = document.getElementById('upload-document');

let next_button = document.getElementById('next-button');
let previous_button = document.getElementById('previous-button');

let i = 1;
next_button.addEventListener('click', (event) => {
    i += 1;
    if(i === 1){
        info_seller.classList.add('block');
        info_seller.classList.remove('hidden');

        info_store.classList.add('hidden');
        info_store.classList.remove('block');

        next_button.setAttribute('type', 'button');
    }else if(i === 2){
        info_store.classList.add('block');
        info_store.classList.remove('hidden');

        info_seller.classList.add('hidden');
        info_seller.classList.remove('block');

        previous_button.classList.remove('hidden');

        next_button.setAttribute('type', 'button');
    }else if(i === 3){
        upload_document.classList.add('block');
        upload_document.classList.remove('hidden');

        info_store.classList.add('hidden');
        info_store.classList.remove('block');

        next_button.setAttribute('type', 'submit');
        next_button.innerHTML = "Ajukan pendaftaran";
        event.preventDefault();
    }
});

previous_button.addEventListener('click', () => {
    i -= 1;
    if(i === 1){
        info_seller.classList.remove('hidden');
        info_seller.classList.add('block');
        
        info_store.classList.remove('block');
        info_store.classList.add('hidden');

        previous_button.classList.add('hidden');
    }else if(i === 2){
        info_store.classList.remove('hidden');
        info_store.classList.add('block');

        upload_document.classList.remove('block');
        upload_document.classList.add('hidden');

        previous_button.classList.remove('hidden');
        next_button.innerHTML = "Selanjutnya <i class='fas fa-chevron-right'></i>"
    }else if(i === 3){
        upload_document.classList.remove('hidden');
        upload_document.classList.add('block');

        info_store.classList.remove('block');
        info_store.classList.add('hidden');

        next_button.setAttribute('type', 'button');
    }
});