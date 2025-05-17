<div class="mt-3">

    <div class="py-5 text-center">

        <a href="/" title="Back to site">
            <i class="fa-solid fa-gift" style="font-size:60px; color:blueviolet;"></i>
        </a>

        <h2>RAP CMS - Scrap Heap</h2>

        <h2>Payment</h2>
        <?php //= dd($products) ?>
    </div>

    <div class="row g-5">

        <div class="col-5 order-md-last">

            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-primary">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="/cart" title="">
                        <i class="fa fa-eye" aria-hidden="true"></i> Your cart
                    </a>
                </span>
                <span class="badge bg-primary rounded-pill"><?= $order['quantity'] ?></span>
            </h4>

            <ul class="list-group mb-3">

                <?php
                $img = [];
                foreach ($images as $idx => $image):
                    $img[$idx] = "<img src=\"{$image[0]['file_path']}{$image[0]['file']}\" alt=\"\" style=\"width: 50px;\">";
                endforeach;

                foreach ($products as $index => $product):
                    ?>
                    <li class="list-group-item d-flex justify-content-between lh-sm">
                        <div>
                            <a href="/products/details?id=<?= $product['id'] ?>" title="View product">
                                <?= $img[$index] ?>
                            </a>
                        </div>
                        <div>
                            <h6 class="my-0">
                                <a href="/products/details?id=<?= $product['id'] ?>" title="View product"
                                    class="link-offset-2 link-underline link-underline-opacity-0">
                                    <?= $product['name'] ?>
                                </a>
                            </h6>
                            <small class="text-body-secondary"><?= substr($product['description'], 0, 20) ?>...</small>
                        </div>
                        <span class="text-body-secondary">R$ <?= currency($product['price']) ?></span>
                    </li>
                    <?php
                endforeach; ?>

                <li class="list-group-item d-flex justify-content-between">
                    <span>Total</span>
                    <strong>R$ <?= currency($order['total']) ?></strong>
                </li>
            </ul>
        </div>

        <div class="col-7">

            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Payment</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        &nbsp;
                    </div>
                    <div class="custom-control custom-radio">
                        User: <?= $user['username'] ?>
                        <br>
                        Email: <?= $user['email'] ?>
                    </div>
                    <div class="form-group">
                        &nbsp;
                    </div>
                    <div class="">
                        <div class="custom-control custom-radio">
                            Address to deliver:
                            <br>
                            <?= $address['zip_code'] ?>
                            <br>
                            <?= $address['address'] ?>, <?= $address['address_number'] ?> <?= $address['address_complement'] ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent text-center">
                    <div id="paypal-button-container"></div>
                </div>
            </div>

        </div>

    </div>

</div>