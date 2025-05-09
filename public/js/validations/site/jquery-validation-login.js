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

    $("#loginForm").validate({
        rules: {
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
        },
        messages: {
            email: {
                required: "Email is required!",
                minlength: "The email post the min length is 5",
                maxlength: "The email post the max length is 150"
            },
            password: {
                required: "Password is required",
                minlength: "The password post the min length is 8",
                maxlength: "The password post the max length is 50"
            },
        }
    });
});
