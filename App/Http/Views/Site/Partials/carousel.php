<div id="myCarousel" class="carousel slide mb-6 py-4 mt-1 bg-secondary" data-bs-ride="carousel">

    <div class="carousel-inner sc-product-item">

        <?php
        foreach ($carouselImages as $key => $value):

            if ($key % 2 == 0):
                ?>

                <div class="carousel-item <?= $value['id'] == 2 ? 'active' : '' ?>">

                    <img src="<?= $value["file_path"] . $value["file"] ?>" class="img-fluid rounded mx-auto d-block h-100"
                        alt="">

                    <div class="container">

                        <div class="carousel-caption text-start">

                            <h1><?= $value["name"] ?></h1>

                            <p>
                                <a class="btn btn-lg btn-danger" href="/products/details?id=<?= $value["id"] ?>">
                                    <i class="fa-solid fa-cart-plus"></i> Add to cart
                                </a>
                            </p>

                        </div>

                    </div>

                </div>

                <?php
            endif;

        endforeach; ?>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

</div>