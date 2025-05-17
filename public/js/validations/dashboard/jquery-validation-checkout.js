$(function () {

    $("#checkoutForm").validate({
        rules: {
            user_id: {
                required: true,
            },
            user_address_id: {
                required: true,
            },
            cart_products_total: {
                required: true,
            },
            cart_products_amount: {
                required: true,
            },

        },
        messages: {
            user_id: 'Provide a User',
            user_address_id: 'Check one this address please',
            cart_products_total: 'Provide a total products in cart',
            cart_products_amount: 'Provide a total amount in cart',
        }
    });

});
