<!-- START THE FEATURETTES -->
<hr class="featurette-divider">

<?php
foreach ($products as $key => $value):

    if ($key % 2 == 1):
        ?>

        <div class="row sc-product-item">

            <div class="col-6">

                <h2 class="featurette-heading fw-normal lh-1 text-center">
                    <?= $value['name'] ?>
                </h2>

                <span class="text-body-secondary text-wrap" style="font-size: 2rem;">
                    <?= substr($value['description'], 0, 30) ?>...
                </span>

                <p class="text-end">
                    <a class="btn btn-lg btn-danger" href="/products/details?id=<?= $value["product_id"] ?>">
                                    <i class="fa-solid fa-cart-plus"></i> Add to cart
                                </a>

                </p>

            </div>

            <div class="col-6 text-center">
                <img src="<?= $value['file_path'] . $value['file'] ?>" alt="">
            </div>

        </div>

        <hr class="featurette-divider">

        <?php
    endif;

endforeach; ?>

<!-- /END THE FEATURETTES -->