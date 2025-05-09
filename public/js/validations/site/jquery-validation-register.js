$(function () {

    let text;

    // $.validator.addMethod('strongPassword', function (value, element) {
    //     return value.length >= 8 && /[a-z]/i.test(value) && /[A-Z]/i.test(value) && /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g.test(value);
    //     //  && /\d/.text(value) && /[a-z]/i.test(value) && /[A-Z]/i.test(value)
    // }, "Min 8 chars long / special chars with <br> One or More Capital and Lower Letter!");
    
    $.validator.addMethod('strongPassword', function (value, element) {
        return value.length >= 8 && /\d/g.text(value) && /[a-z]/g.test(value) && /[A-Z]/g.test(value) && /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g.test(value);
        //  && /\d/.text(value) && /[a-z]/i.test(value) && /[A-Z]/i.test(value)
    }, "Min 8 chars long / special chars with <br> One or More Capital and Lower Letter!");

    $("#registerForm").validate({
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
                maxlength: 50,
            },
            password: {
                required: true,
                strongPassword: true,
                minlength: 8,
                maxlength: 150,
            },
            password_confirm: {
                required: true,
                equalTo: "#password",
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
            password: {
                required: "Password is required",
                minlength: "The password post the min length is 8",
                maxlength: "The password post the max length is 150"
            },
            password_confirm: {
                required: "Password confirm is required",
                minlength: "The title post the min length is 5",
                maxlength: "The title post the max length is 50"
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
