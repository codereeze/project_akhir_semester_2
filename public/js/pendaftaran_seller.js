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

let previewPhoto = document.getElementById('preview-photo');
let previewKTP = document.getElementById('preview-ktp');
let previewStore = document.getElementById('preview-store');

let fileInput1 = document.getElementById('file-input1');
let fileInput2 = document.getElementById('file-input2');
let fileInput3 = document.getElementById('file-input3');


fileInput1.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewPhoto.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});

fileInput2.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewKTP.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});

fileInput3.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewStore.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});

