<div class="card mb-4">

    <div class="card-header bg-secondary-subtle">
        <i class="fas fa-table me-1"></i>
        Orders
    </div>

    <?php //= dd($orders) ?>

    <div class="card-body bg-secondary-subtle">

        <table class="table table-secondary table-striped table-hover bg-secondary-subtle">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Delivered at</th>
                    <th>Order date</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>User</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th>Delivered at</th>
                    <th>Order date</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                if ($orders):
                    foreach ($orders as $order): ?>
                        <tr>
                            <td class="text-center">
                                <a href="/dashboard/orders/details?order=<?= $order['id'] ?>" title="View details of order">
                                    <?= $order['username'] ?>
                                </a>
                            </td>
                            <td class="text-center"><?= $order['quantity'] ?></td>
                            <td><?= $order['total'] ?></td>
                            <td>
                                <?php if ($order['status'] == 'on_hold'): ?>
                                    <span class="bagde bg-warning shadow rounded px-2">
                                        <a href="/dashboard/payments/create" title="Go to payment">
                                            Not Paid
                                        </a>
                                    </span>
                                <?php else: ?>
                                    <span class="bagde bg-success shadow rounded px-2">
                                        <a href="/dashboard/orders/details?id=<?= $order['id'] ?>" title="View purchase">
                                            <?= $order['status'] ?>
                                        </a>
                                    </span>
                                <?php endif; ?>
                            </td>
                            <td><?= $order['delivered'] ?></td>
                            <td><?= $order['updated_at'] ?? $order['created_at'] ?></td>
                        </tr>
                        <?php
                    endforeach;
                else: ?>
                    <tr class="text-center">
                        <td colspan="6">No order registred!</td>
                    </tr>
                    <?php
                endif;
                ?>
            </tbody>
        </table>

    </div>
    <!-- Em analise (value: on_hold) - Pago (value: paid) - Enviado (value: shipped) - Entregue (value: delivered) -->

</div>