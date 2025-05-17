<div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">

    <div class="col-lg-12 px-0">

        <h1 class="display-4 fst-italic">Ours Products</h1>

    </div>

</div>

<div class="row mb-2">

    <?php if (empty($products)): ?>

        <div class="col-md-12 mb-4">
            <h1 class="display-4 fst-italic text-center">No one product registred!</h1>
        </div>

    <?php else: ?>

        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">

        <?php
        foreach ($products as $key => $value):

            if ($key % 2 == 1):
                ?>

                <div class="row">

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
            else:
                ?>

                <div class="row">

                    <div class="col-6 text-center">
                        <img src="<?= $value['file_path'] . $value['file'] ?>" alt="">
                    </div>

                    <div class="col-6">

                        <h2 class="featurette-heading fw-normal lh-1 text-center">
                            <?= $value['name'] ?>
                        </h2>

                        <span class="text-body-secondary text-wrap" style="font-size: 2rem;">
                            <?= substr($value['description'], 0, 30) ?>...
                        </span>

                        <p>
                            <a class="btn btn-lg btn-danger" href="/products/details?id=<?= $value["product_id"] ?>">
                                <i class="fa-solid fa-cart-plus"></i> Add to cart
                            </a>
                        </p>

                    </div>

                </div>

                <hr class="featurette-divider">
                <?php
            endif;

        endforeach; ?>

        <!-- /END THE FEATURETTES -->

    <?php endif; ?>

</div>