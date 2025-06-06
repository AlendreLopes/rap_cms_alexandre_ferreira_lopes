$().ready(function () {
    let text;
    $("#blogForm").validate({
        rules: {
            title: {
                required: true,
                minlength: 5,
                maxlength: 50,
                // Using the normalizer to trim the value of the element
                // before validating it.
                //
                // The value of `this` inside the `normalizer` is the corresponding
                // DOMElement. In this example, `this` references the `username` element.
                normalizer: function (value) {
                    text = value;
                    return text.trim(value);
                }
            },
            description: {
                required: true,
                // Using the normalizer to trim the value of the element
                // before validating it.
                //
                minlength: 50,
                maxlength: 1000,
                // The value of `this` inside the `normalizer` is the corresponding
                // DOMElement. In this example, `this` references the `username` element.
                normalizer: function (value) {
                    text = value;
                    return text.trim(value);
                }
            },
            // status: {
            //     required: true,
            //     // Using the normalizer to trim the value of the element
            //     // before validating it.
            //     //
            //     // The value of `this` inside the `normalizer` is the corresponding
            //     // DOMElement. In this example, `this` references the `username` element.
            //     // normalizer: function (value) {
            //     //     text = value;
            //     //     return text.trim(value);
            //     // }
            // },
        },
        messages: {
            title: {
                required: "Please digit the title of post!",
                minlength: "The title post the min length is 5",
                maxlength: "The title post the max length is 50"
            },
            description: {
                required: "Description is required",
                minlength: "Description of post must be at 50 characters long minimun",
                maxlength: "The title post the max length is 1000"
            },
            // status: "Select the status of post",
            
        }
    });
});
