$(function () {
    
    // Show password on Login Register
    $('#eyeSlash').click(function () {

        if ($(this).hasClass('fa-eye-slash')) {

            $(this).removeClass('fa-eye-slash');

            $(this).addClass('fa-eye');

            $('#password').attr('type', 'text');

            $('#password_confirm').attr('type', 'text');

        } else {

            $(this).removeClass('fa-eye');

            $(this).addClass('fa-eye-slash');

            $('#password').attr('type', 'password');

            $('#password_confirm').attr('type', 'text');
        }
    });

    // Blueimp Upload File
    // $('#fileupload').fileupload();

    // // Data tables
    $('.table').DataTable();

    //display the summernote drop down menu
    $('.dropdown-toggle').dropdown();

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