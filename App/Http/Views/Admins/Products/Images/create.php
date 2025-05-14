<div class="container-sm mt-1 p-3 rounded text-body-emphasis bg-body-secondary shadow">

    <div class="row">

        <div class="col text-center mb-2">

            <h4>
                Image <i class="fa fa-upload" aria-hidden="true"></i> Upload
            </h4>

        </div>

        <div class="col text-center">

            <a href="/administrators/products/show?id=<?= $product ?>" class="btn btn-outline-secondary"><i
                    class="fa fa-calendar-check-o" aria-hidden="true"></i> Cancel</a>

        </div>

    </div>

    <div class="row">

        <div class="col-lg-12 mb-2">

            <?php if ($errors['errors']): ?>

                <div class="col-sm-12 text-center text-danger m-2">
                    <?= $errors['errors']['images'] ?>
                </div>

            <?php endif; ?>

        </div>

    </div>

    <div class="row">

        <div class="col-lg-12 mb-2">
            <?php if ($errors['errors']): ?>
                <div class="col-sm-12 text-center text-danger m-2">
                    <?= $errors['errors']['files'] ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-12">

            <form id="imagesForm" action="/administrators/products/images/store" method="POST" class="mb-4"
                enctype="multipart/form-data">

                <input type="hidden" name="_method" value="PUT">

                <input type="hidden" name="product_id" value="<?= $product ?>">

                <div class="row mb-2">

                    <div class="col text-center">

                        <input type="file" name="file[]" id="file" multiple>

                    </div>

                </div>

            </form>

        </div>

        <div class="col-12">
            <div id="errorBlock" class="help-block"></div>
        </div>
    </div>

</div>