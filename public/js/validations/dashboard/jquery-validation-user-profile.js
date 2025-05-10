$(function () {

    let text;

    $("#useEditForm").validate({
        rules: {
            username: {
                required: true,
                minlength: 5,
                maxlength: 50,
            },
            email: {
                required: true,
                email: true,
                minlength: 5,
                maxlength: 150,
            },
            phone: {
                required: true,
                minlength: 16,
                maxlength: 20,
            },
        },
        messages: {
            username: {
                required: "Username is required!",
                minlength: "The username post the min length is 5",
                maxlength: "The username post the max length is 50"
            },
            email: {
                required: "Email is required!",
                minlength: "The email post the min length is 5",
                maxlength: "The email post the max length is 150"
            },
            phone: {
                required: "Phone is required!",
                minlength: "The phone post the min length is 16",
                maxlength: "The phone post the max length is 20"
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
