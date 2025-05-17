<div class="container bg-secondary-subtle py-5 shadow rounded">

    <div class="row d-flex flex justify-items-center">

        <div class="col-6">

            <?php foreach ($produtcDetailsImages as $image): ?>

                <img src="<?= "{$image['file_path']}{$image['file']}" ?>" class="img-fluid rounded mx-auto d-block mb-1"
                    alt="" srcset="">

            <?php endforeach; ?>


        </div>

        <div class="col-6">

            <h3>Product Name</h3>
            <!-- Name -->
            <h3 class="ms-3"><?= $produtcDetails['name'] ?></h3>
            <!-- Category and Brand -->
            <div>
                <h4>Category:</h4>
                <h5 class="ms-3"><i class="fa fa-tag" aria-hidden="true"></i> <?= $produtcDetails['category'] ?>
                </h5>
            </div>
            <div>
                <h4>Brand:</h4>
                <h5 class="ms-3"><i class="fa fa-copyright" aria-hidden="true"></i> <?= $produtcDetails['brand'] ?>
                </h5>
            </div>
            <!-- Price -->
            <div>
                <h4>Price:</h4>
                <h5 class="ms-3"><i class="fa-solid fa-brazilian-real-sign"></i>
                    <?= currency($produtcDetails['price']) ?></h5>
            </div>
            <!-- Description -->
            <div>
                <h4><i class="fa fa-audio-description" aria-hidden="true"></i> Description</h4>
                <h5 class="ms-3">
                    <p class="lead mb-3"><?= $produtcDetails['description'] ?></p>
                </h5>
            </div>
            <!-- Colors -->
            <div>
                <h4>Color:</h4>
                <h5 class="ms-3"><?= $produtcDetails['collor'] ?></h5>
            </div>
            <!-- Sizes -->
            <div>
                <h4>Size:</h4>
                <h5 class="ms-3"><?= $produtcDetails['size'] ?></h5>
            </div>
            <!-- Quantity -->
            <div>
                <h5 class="ms-3">
                    <!-- In or Off Stock -->
                    <?php if ($produtcDetails['quantity'] > 2): ?>
                        <span class="bagde bg-success shadow rounded px-2">In Stock</span>
                    <?php else: ?>
                        <span class="bagde bg-danger shadow rounded px-2 mb-3">Out of Stock</span>
                    <?php endif; ?>
                </h5>
            </div>
            <!-- Add Cart -->
            <div>
                <form action="/cart/add" method="POST">
                    <input type="hidden" name="id" value="<?= $produtcDetails["id"] ?>">
                    <button class="btn btn-lg btn-danger">
                        <i class="fa-solid fa-cart-plus"></i> Add to cart
                    </button>
                </form>
            </div>

        </div>

    </div>

</div>