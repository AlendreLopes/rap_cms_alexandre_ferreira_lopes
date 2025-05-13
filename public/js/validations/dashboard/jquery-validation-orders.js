$(function () {

    let text;

    $("#addressForm").validate({
        rules: {
            zip_code: {
                required: true,
                minlength: 9,
                maxlength: 9,
            },
            address: {
                required: true,
                minlength: 5,
                maxlength: 150,
            },
            address_number: {
                required: true,
                minlength: 1,
                maxlength: 50,
            },
            neighborhood: {
                required: true,
                minlength: 1,
                maxlength: 150,
            },
            city: {
                required: true,
                minlength: 1,
                maxlength: 150,
            },
            state: {
                required: true,
                minlength: 2,
                maxlength: 2,
            },
            country: {
                required: true,
                minlength: 2,
                maxlength: 2,
            },
        },
        messages: {
            zip_code: {
                required: "Zip code is required!",
                minlength: "The zip code post the min length is 5",
                maxlength: "The zip code post the max length is 50"
            },
            address: {
                required: "Address is required!",
                minlength: "The address post the min length is 5",
                maxlength: "The address post the max length is 50"
            },
            address_number: {
                required: "Address number is required!",
                minlength: "The address number post the min length is 5",
                maxlength: "The address number post the max length is 50"
            },
            neighborhood: {
                required: "Neighborhood is required!",
                minlength: "The neighborhood post the min length is 5",
                maxlength: "The neighborhood post the max length is 50"
            },
            city: {
                required: "City is required!",
                minlength: "The city post the min length is 2",
                maxlength: "The city post the max length is 150"
            },
            state: {
                required: "State is required!",
                minlength: "The state post the min length is 2",
                maxlength: "The state post the max length is 2"
            },
            country: {
                required: "Country is required!",
                minlength: "The country post the min length is 2",
                maxlength: "The country post the max length is 2"
            },
        }
    });

    // $("#email").blur(function (e) { 
    //     // e.preventDefault();
    //     let value = $(this).val();
    //     // alert(value);
    //     $.ajax({
    //         type: "POST",
    //         url: "/register/email",
    //         data: value,
    //         dataType: "json",
    //         success: function (response) {
    //             console.log(response);
    //         }
    //     });
    //     console.log(value);
    //     // $("#userRegister").addClass{}
    //     // $("button").prop("disabled", true);
    //     // $(this).val(function (index, currentvalue) { /* function code */ });
    // });
    // $("button").prop("disabled", true);
});
