$(document).ready(function () {
    
    // Blueimp Upload File
    // $('#fileupload').fileupload();

    // Data tables
    $('.table').DataTable();

    //display the summernote drop down menu
    $('.dropdown-toggle').dropdown();

    // Delete Imtem
    function deleteItem(id) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(id).submit();
            }
        });
    }
    
    // // Manipulate Images
    // function handleImageInputChange(input, image) {
    //     document.getElementById(input).addEventListener('change', function () {
    //         readUrl(this, image)
    //     });
    // }
    // // Get path of image
    // function readUrl(input, image) {
    //     if (input.files && input.files[0]) {
    //         let reader = new FileReader();
    //         reader.onload = function (e) {
    //             document.getElementById(image).classList.remove('d-none');
    //             document.getElementById(image).setAttribute('src', e.target.result);
    //         }
    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }
    // // handleImages Preview
    // handleImageInputChange('thumbnail', 'thumbnail_preview');
    // handleImageInputChange('first_image', 'first_image_preview');
    // handleImageInputChange('second_image', 'second_image_preview');
    // handleImageInputChange('third_image', 'third_image_preview');
    // 

});