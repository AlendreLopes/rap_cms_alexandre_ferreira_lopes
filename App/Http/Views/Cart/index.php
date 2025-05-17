<?php if (isset($_SESSION['rap_cms_cart'])): ?>
    <!-- Cart Start -->
    <div class="container mt-5 pt-5">

        <div class="mb-5 text-center">

            <a href="/" title="Back to site">
                <i class="fa-solid fa-gift" style="font-size:60px; color:blueviolet;"></i>
            </a>

            <h2>RAP CMS - Scrap Heap</h2>

            <h2>Cart</h2>

        </div>

        <div class="row px-xl-5">

            <div class="col-lg-8 table-responsive mb-5">

                <table class="table table-bordered text-center mb-0">

                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>

                    <tbody class="align-middle">

                        <?php foreach ($productInCart as $product): ?>
                            <tr>
                                <td class="align-middle">
                                    <a href="/products/details?id=<?= $product->getId() ?>">
                                        <img src="<?= $product->getImage() ?>" alt="" style="width: 50px;">
                                    </a>
                                </td>
                                <td class="align-middle"><?= $product->getPrice() ?></td>
                                <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <form action="/cart/minus-one" method="POST">
                                                <input type="hidden" name="_method" value="PATCH">
                                                <input type="hidden" name="id" value="<?= $product->getId() ?>">
                                                <button class="btn btn-sm btn-primary btn-minus">
                                                    <i class="fa fa-minus"></i>
                                                </button>
                                            </form>
                                        </div>
                                        <input type="text" class="form-control form-control-sm bg-secondary text-center"
                                            value="<?= $product->getQuantity() ?>">
                                        <div class="input-group-btn">
                                            <form action="/cart/plus-one" method="POST">
                                                <input type="hidden" name="_method" value="PUT">
                                                <input type="hidden" name="id" value="<?= $product->getId() ?>">
                                                <button class="btn btn-sm btn-primary btn-plus">
                                                    <i class="fa fa-plus"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle"><?= ($product->getPrice() * $product->getQuantity()) ?></td>
                                <td class="align-middle">
                                    <form action="/cart/remove" method="POST">
                                        <input type="hidden" name="_method" value="PATCH">
                                        <input type="hidden" name="id" value="<?= $product->getId() ?>">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

            <div class="col-lg-4">

                <div class="card border-secondary mb-5">

                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>

                    <div class="card-body">

                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium"><?= currency($_SESSION['rap_cms_cart']['total']) ?></h6>
                        </div>

                    </div>

                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold"><i class="fa-solid fa-brazilian-real-sign"></i>
                                <?= currency($_SESSION['rap_cms_cart']['total']) ?></h5>
                        </div>
                        <div class="text-center">
                            <a href="/cart/checkout" class="btn btn-block btn-outline-warning my-3 py-3">
                                Proceed To Checkout
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-4">
                <a href="/" class="btn btn-primary">
                    Continue shopping
                </a>
            </div>
            <div class="col-4 text-end">
                <form action="/cart/clear" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger">
                        <i class="fa fa-warning" aria-hidden="true"></i> Clear cart
                    </button>
                </form>
            </div>
            <div class="col">&nbsp;</div>
        </div>

    </div>
    <!-- Cart End -->
<?php else: ?>

    <div class="container py-5">

        <div class="row">

            <div class="col-lg-12 text-center alert alert-warning font-semibold">
                <img src="/public/assets/images/cart/empty-cart.svg" alt="Cart empty">
                <h2>Your cart is empty!</h2>
            </div>

            <div class="col-12">
                <a href="/" class="btn btn-primary btn-sm my-3 py-3">
                    Continue shopping
                </a>

            </div>
        </div>

    </div>

<?php endif; ?>