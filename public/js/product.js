
const fileInput = document.getElementById('dropzone-file');
const previewProfile = document.getElementById('preview');

fileInput.addEventListener('change', function() {
    const file = this.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewProfile.src = e.target.result;
        }
        reader.readAsDataURL(file);
    }
});