const fileInput = document.getElementById('bookCoverFile');
const previewImage = document.getElementById('bookCoverPreview');
fileInput.addEventListener('change', function () {
    if (this.files && this.files[0]) {
        const reader = new FileReader();
        reader.onload = function (e) {
            previewImage.src = e.target.result;
        };
        reader.readAsDataURL(this.files[0]);
    } else {
        previewImage.src = "{{ asset('icons/sampleprofile.jpg') }}";
    }
});