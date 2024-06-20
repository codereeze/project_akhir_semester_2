
 const fileInput = document.getElementById('file-input');
 const triggerInputButton = document.getElementById('trigger-input-file');
 const previewProfile = document.getElementById('preview-profile');

 triggerInputButton.addEventListener('click', function() {
     fileInput.click();
 });

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