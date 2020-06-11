$('.download-img').change(function(event){
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('.preview-image').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
})