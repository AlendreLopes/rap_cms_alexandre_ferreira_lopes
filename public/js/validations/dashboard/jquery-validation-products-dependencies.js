$(function () {

    let text;

    $("#productsDependenciesForm").validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 150,
            },
        },
    });

});
