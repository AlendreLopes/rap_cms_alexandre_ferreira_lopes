<div class="mt-3">

    <div class="py-5 text-center">

        <a href="/" title="Back to site">
            <i class="fa-solid fa-gift" style="font-size:60px; color:blueviolet;"></i>
        </a>

        <h2>RAP CMS - Scrap Heap</h2>

        <h2>Checkout form</h2>
        <?php //= dd($userData) ?>
    </div>

    <div class="row g-5">

        <div class="col-md-5 col-lg-4 order-md-last">

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="/cart" title="">
                        <i class="fa fa-eye" aria-hidden="true"></i> Your cart
                    </a>
                </span>
                <span class="badge bg-primary rounded-pill"><?= $cartProductsTotal ?></span>
            </h4>

            <ul class="list-group mb-3">

                <?php foreach ($cartProduct as $product): ?>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <a href="/products/details?id=<?= $product->getId() ?>" title="View product">
                                <img src="<?= $product->getImage() ?>" alt="" style="width: 50px;">
                            </a>
                        </div>
                        <div>
                            <h6 class="my-0">
                                <a href="/products/details?id=<?= $product->getId() ?>" title="View product"
                                    class="link-offset-2 link-underline link-underline-opacity-0">
                                    <?= $product->getName() ?>
                                </a>
                            </h6>
                            <small class="text-body-secondary"><?= substr($product->getDescription(), 0, 20) ?>...</small>
                        </div>
                        <span class="text-body-secondary">R$ <?= $product->getPrice() ?></span>
                    </li>
                <?php endforeach; ?>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>R$ <?= currency($cartProductsAmount) ?></strong>
                </li>
            </ul>
        </div>

        <div class="col-md-7 col-lg-8">

            <h4>Billing address</h4>

            <form id="checkoutForm" action="/dashboard/orders/create" novalidate method="POST">

                <div class="row my-4">

                    <div class="col-6">
                        <label for="firstName" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="firstName" value="<?= $userData['username'] ?>"
                            required>
                        <input type="hidden" name="user_id" value="<?= $userData['id'] ?>">
                    </div>

                    <div class="col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com"
                            value="<?= $userData['email'] ?>">
                    </div>

                    <div class="col-12">
                        <?php if (isset($errors['errors'])): ?>
                            <div class="col-sm-12 text-center text-danger m-2">
                                <?= $errors['errors']['orders'] ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-12 mt-3">
                        <i class="fa fa-street-view" aria-hidden="true"></i> Address
                    </div>

                    <div class="col-12 mt-3">

                        <?php foreach ($userAddress as $address): ?>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="user_address_id"
                                    id="<?= $address['id'] ?>" value="<?= $address['id'] ?>">
                                <label class="form-check-label" for="<?= $address['id'] ?>">
                                    <i class="fa-solid fa-house"></i> <?= $address['zip_code'] ?> -
                                    <?= $address['address'] ?>, <?= $address['address_number'] ?>
                                    <?= $address['address_complement'] ?? '' ?>
                                </label>
                            </div>

                        <?php endforeach; ?>

                    </div>

                </div>

                <input type="hidden" name="cart_products_total" value="<?= $cartProductsTotal ?>">

                <input type="hidden" name="cart_products_amount" value="<?= $cartProductsAmount ?>">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Place Order</button>

            </form>

        </div>

    </div>

</div>