<div class="container bg-secondary-subtle mt-2 pt-1 px-3 shadow rounded">

    <div class="text-center mb-4">
        User
        <h3 class="py-1"><?= $user['username'] ?></h3>
        <small><?= $user['email'] ?></small>

    </div>

    <div class="row mx-auto">

        <div class="card-shadow-sm p-2">

            <div class="card-header">
                <h5 class="my-2">
                    <i class="fa-solid fa-id-card mt-3 me-2" style="font-size:30px;"></i> Personal Information
                </h5>
            </div>

            <div class="card-body">
                <div class="row mt-5 mb-3">
                    <div class="col-3"></div>
                    <div class="col">Name:</div>
                    <div class="col-8"><?= $user['username'] ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-3"></div>
                    <div class="col">Email:</div>
                    <div class="col-8"><?= $user['email'] ?></div>
                </div>
                <div class="row mb-3">
                    <div class="col-3"></div>
                    <div class="col">Phone:</div>
                    <div class="col-8"><?= $user['phone'] ?? '(00) 0 0000-0000' ?></div>
                </div>
            </div>

        </div>
    </div>

    <div class="row mx-auto">

        <div class="card-header">
            <h5 class="my-2">
                <i class="fa-solid fa-location-dot me-2" style="font-size:30px;"></i> Address(es)
            </h5>
        </div>

        <div class="card-body">

            <div class="row mt-2 mb-4">

                <?php if ($userAddress): ?>

                    <?php foreach ($userAddress as $address): ?>

                        <div class="col-3"></div>

                        <d class="bg-dark text-white col-6 py-3">

                            <i class="fa-solid fa-house"></i> - <?= $address['address'] ?>, <?= $address['address_number'] ?>
                            <?= $address['address_complement'] ?? '' ?>
                            <br>
                            <small class="ms-5"><?= $address['zip_code'] ?> - <?= $address['neighborhood'] ?> -
                                <?= $address['city'] ?> - <?= $address['state'] ?></small>

                        </d>

                        <div class="col-3 py-3 text-center"></div>

                    <?php endforeach; ?>

                <?php else: ?>

                    <div class="col-3"></div>

                    <div class="bg-dark text-white col-6 py-3 text-center">

                        <i class="fa fa-registered" aria-hidden="true"></i> No address registered!

                    </div>

                    <div class="col-3"></div>

                <?php endif; ?>

            </div>

        </div>

    </div>

    <div class="row mx-auto">

        <div class="card-header">
            <h5 class="my-2">
                <i class="fa-solid fa-money-check-dollar me-2" style="font-size:30px;"></i> Orders
            </h5>
        </div>

        <div class="card-body">

            <div class="row mt-2 mb-4">

                <?php if ($usersOrders): ?>

                    <?php foreach ($usersOrders as $orders): ?>

                        <div class="col-3"></div>

                        <d class="bg-dark text-white col-6 py-3">

                            <i class="fa-solid fa-house"></i> - <?= $orders['orders'] ?>, <?= $orders['orders_number'] ?>
                            <?= $orders['orders_complement'] ?? '' ?>
                            <br>
                            <small class="ms-5"><?= $orders['zip_code'] ?> - <?= $orders['neighborhood'] ?> -
                                <?= $orders['city'] ?> - <?= $orders['state'] ?></small>

                        </d>

                        <div class="col-3 py-3 text-center"></div>

                    <?php endforeach; ?>

                <?php else: ?>

                    <div class="col-3"></div>

                    <div class="bg-dark text-white col-6 py-3 text-center">

                        <i class="fa fa-registered" aria-hidden="true"></i> No orders registered!

                    </div>

                    <div class="col-3"></div>

                <?php endif; ?>

            </div>

        </div>

    </div>

</div>