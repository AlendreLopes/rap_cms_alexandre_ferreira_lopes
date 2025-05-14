    <div class="container mt-2 p-2 rounded text-body-emphasis bg-body-secondary shadow">
        
        <nav>
            <div class="nav nav-tabs justify-items-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-product-tab" data-bs-toggle="tab" data-bs-target="#nav-product"
                    type="button" role="tab" aria-controls="nav-product" aria-selected="true">Product</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                    type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Images</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade show active" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab"
                tabindex="0">

                <div class="row mt-2">

                    <div class="col">&nbsp;</div>

                    <div class="col-11">
                        <h3>Product Name</h3>
                        <!-- Name -->
                        <h3 class="ms-3"><?= $show['name'] ?></h3>
                        <!-- Category and Brand -->
                        <div>
                            <h4>Category:</h4>
                            <h5 class="ms-3"><i class="fa fa-tag" aria-hidden="true"></i> <?= $show['category'] ?></h5>
                        </div>
                        <div>
                            <h4>Brand:</h4>
                            <h5 class="ms-3"><i class="fa fa-copyright" aria-hidden="true"></i> <?= $show['brand'] ?></h5>
                        </div>
                        <!-- Price -->
                        <div>
                            <h4>Price:</h4>
                            <h5 class="ms-3"><i class="fa-solid fa-brazilian-real-sign"></i> <?= currency($show['price']) ?></h5>
                        </div>
                        <!-- Description -->
                        <div>
                            <h4><i class="fa fa-audio-description" aria-hidden="true"></i> Description</h4>
                            <h5 class="ms-3">
                                <p class="lead mb-3"><?= $show['description'] ?></p>
                            </h5>
                        </div>
                        <!-- Colors -->
                        <div>
                            <h4>Color:</h4>
                            <h5 class="ms-3"><?= $show['collor'] ?></h5>
                        </div>
                        <!-- Sizes -->
                        <div>
                            <h4>Size:</h4>
                            <h5 class="ms-3"><?= $show['size'] ?></h5>
                        </div>
                        <!-- Quantity -->
                        <div>
                            <h4>Quantity:
                                <!-- In or Off Stock -->
                                <?php if ($show['quantity'] > 2): ?>
                                    <span class="bagde bg-success shadow rounded px-2 mb-3">In Stock</span>
                                <?php else: ?>
                                    <span class="bagde bg-danger shadow rounded px-2 mb-3">Out of Stock</span>
                                <?php endif; ?>
                            </h4>
                            <h5 class="ms-3"><?= $show['quantity'] ?></h5>
                        </div>
                        <!-- Buttons to Back Edit -->
                        <div class="text-center">
                            <a href="/administrators/products" class="btn btn-outline-secondary shadow mb-3 me-2">Back</a>
                            <a href="/administrators/products/edit?id=<?= $show['id'] ?>"
                                class="btn btn-outline-success shadow mb-3 me-2">Edit</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                <div class="row mt-2">

                    <div class="col-6">
                        <!-- Image(s) -->
                        <h2>Image(s)</h2>

                    </div>

                    <div class="col-6 text-end">

                        <!-- Buttons to Upload -->
                        <a href="/administrators/products/images/create?product=<?= $show['id'] ?>"
                            class="btn btn-outline-success shadow mb-1"><i class="fa fa-upload" aria-hidden="true"></i>
                            Upload</a>

                    </div>

                </div>

                <div class="row">


                    <?php foreach ($images as $image): ?>

                        <div class="col-3">&nbsp;</div>

                        <div class="col-6">
                            <img src="<?= "{$image['file_path']}{$image['file']}" ?>"
                                class="img-fluid rounded mx-auto d-block h-50 mb-1" alt="" srcset="">
                        </div>

                        <div class="col-3 text-start">

                            <a href="#" onclick="deleteItem(<?= $image['id'] ?>)" class="btn btn-outline-danger btn-sm" title="Delete">
                                <!-- <i class="fa-solid fa-radiation"></i> -->
                                <i class="fa-solid fa-skull-crossbones"></i>
                            </a>

                            <form id="<?= $image['id'] ?>" action="/administrators/products/images/delete" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $image['id'] ?>">
                                <input type="hidden" name="product_id" value="<?= $show['id'] ?>">
                            </form>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>