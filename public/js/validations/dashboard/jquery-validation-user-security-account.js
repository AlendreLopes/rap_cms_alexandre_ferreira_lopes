$(function () {

    let text;

    $.validator.addMethod('strongPassword', function (value, element) {
        return value.length >= 8 && /[a-z]/i.test(value) && /[A-Z]/g.test(value) && /([~!@#$%^&*()_+=`{}\[\]\-|\\:;'<>,.\/? ])+/g.test(value);
        //  && /\d/.text(value) && /[a-z]/i.test(value) && /[A-Z]/i.test(value)
    }, "Min 8 chars long / special chars with <br> One or More Capital and Lower Letter!");

    $("#securityForm").validate({
        rules: {
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
            password: {
                required: "Password is required",
                minlength: "The password post the min length is 8",
                maxlength: "The password post the max length is 150"
            },
            password_confirm: {
                required: "Password confirm is required",
                minlength: "The password post the min length is 8",
                maxlength: "The password post the max length is 150"
            },
        }
    });

});
