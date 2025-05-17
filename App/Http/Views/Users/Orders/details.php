<div class="mt-3">

    <div class="py-5 text-center">

        <a href="/" title="Back to site">
            <i class="fa-solid fa-gift" style="font-size:60px; color:blueviolet;"></i>
        </a>

        <h2>RAP CMS - Scrap Heap</h2>

        <h2>Payment form</h2>
        <?php //= dd($orders) ?>
    </div>


    <div class="row px-xl-5">

        <div class="col-12 table-responsive mb-5">

            <table class="table table-bordered text-center mb-0">

                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody class="align-middle">

                    <?php foreach ($orders as $product): ?>
                        <tr>
                            <td class="align-middle">
                            <?= $product['name'] ?>                                
                            </td>
                            <td class="align-middle"><?= $product['price'] ?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">

                                    <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                        value="<?= $product['quantity'] ?>">
                                </div>
                            </td>
                            <td class="align-middle"><?= ($product['price'] * $product['quantity']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

    <div class="row g-5">

        <div class="col-md-5 col-lg-4 order-md-last">

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="/cart" title="">
                        <i class="fa fa-eye" aria-hidden="true"></i> Your cart
                    </a>
                </span>
                <span class="badge bg-primary rounded-pill"><?= \count($orders) ?></span>
            </h4>

            <ul class="list-group mb-3">

                <?php foreach ($orders as $product): ?>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <a href="/products/details?id=<?= $product['id'] ?>" title="View product">
                                <img src="<?= $product->getImage() ?>" alt="" style="width: 50px;">
                            </a>
                        </div>
                        <div>
                            <h6 class="my-0">
                                <a href="/products/details?id=<?= $product['id'] ?>" title="View product"
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
                    <strong>R$ <?= currency($_SESSION['rap_cms_cart']['total']) ?></strong>
                </li>
            </ul>
        </div>

        <div class="col-md-7 col-lg-8">

            <h4>Billing address</h4>

            <form action="/dashboard/orders/create" class="needs-validation" novalidate method="POST">

                <div class="row my-4">

                    <div class="col-6">
                        <label for="firstName" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder=""
                            value="<?= $user['username'] ?>" required>
                    </div>

                    <div class="col-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com"
                            value="<?= $user['email'] ?>">
                    </div>

                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" placeholder="1234 Main St"
                            value="<?= $user['address'] ?>, <?= $user['address_number'] ?> <?= $user['address_complement'] ?>"
                            required>
                    </div>

                    <div class="col-md-3">
                        <label for="zip_code" class="form-label">Zip</label>
                        <input type="text" name="zip_code" class="form-control" value="<?= $user['zip_code'] ?>"
                            required>
                    </div>

                    <div class="col-md-5">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" class="form-control" value="<?= $user['city'] ?>" required>
                    </div>

                    <div class="col-md-4">
                        <label for="state" class="form-label">State</label>
                        <input type="text" name="state" class="form-control" value="<?= $user['state'] ?>" required>
                    </div>

                </div>

                <div class="col-12">
                    <?php if (isset($errors['errors'])): ?>
                        <div class="col-sm-12 text-center text-danger m-2">
                            <?= $errors['errors']['orders'] ?>
                        </div>
                    <?php endif; ?>
                </div>

                <button class="w-100 btn btn-primary btn-lg" type="submit">Place Order</button>

            </form>

        </div>

    </div>

</div>

<!-- <div id="paypal-button-container"></div> -->


<!-- // rap_cms_college
// //
// Client ID
// AfxOiaE8x0T-FjKcdARPPez3ArsvnvaTkjuJkDCUJ3-ZX9lYXq7RHPvXTVYp-TqcLZMZ8Sl8eZU5i5xJ
// //
// Secret Key
// EBEySVYG6l0BbtrgrOYFUMCNeQLGsbWzEQZmHzNWQo4-1b3eVg62MpV-_VY2Yx6EstrQvo2LKb-milE_ -->