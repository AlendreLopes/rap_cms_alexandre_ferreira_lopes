$(function () {

    let text;

    $("#produtcForm").validate({
        rules: {
            brand_id: {
                required: true,
            },
            category_id: {
                required: true,
            },
            collor_id: {
                required: true,
            },
            size_id: {
                required: true,
            },
            name: {
                required: true,
                minlength: 2,
                maxlength: 150,
            },
            slug: {
                required: true,
                minlength: 2,
                maxlength: 200,
            },
            quantity: {
                required: true,
                number: true,
                minlength: 1,
                maxlength: 150,
            },
            price: {
                required: true,
                number: true,
                minlength: 1,
                maxlength: 150,
            },
            status: {
                required: true,
            },
            discount: {
                required: true,
                number: true,
                minlength: 1,
                maxlength: 15,
            },
            description: {
                required: true,
                minlength: 50,
                maxlength: 500,
            },
        },
    });

});
