$(function () {

    let text;

    $("#recoverForm").validate({
        rules: {
            email: {
                required: true,
                email: true,
                minlength: 5,
                maxlength: 150,
            },
        },
        messages: {
            email: {
                required: "Please digit the title of post!",
                minlength: "The title post the min length is 5",
                maxlength: "The title post the max length is 150"
            },
        }
    });
});
