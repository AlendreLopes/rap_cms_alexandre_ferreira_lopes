<div class="card mb-4">

    <div class="card-header bg-secondary-subtle">
        <i class="fas fa-table me-1"></i>
        Payments
    </div>

    <div class="card-body bg-secondary-subtle">

        <table class="table table-secondary table-striped table-hover bg-secondary-subtle">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Order</th>
                    <th>Transaction Id</th>
                    <th>Order date</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>User</th>
                    <th>Order</th>
                    <th>Transaction Id</th>
                    <th>Order date</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                if ($payments):
                    foreach ($payments as $payment): ?>
                        <tr>
                            <td class="text-center">
                                <?= $payment['username'] ?>
                            </td>
                            <td class="text-center">
                                <a href="/dashboard/orders?id=<?= $payment['user_id'] ?>" class="btn btn-outline-success">
                                    View
                                </a>
                            </td>
                            <td>
                                <?= $payment['transaction_id'] ?>
                            </td>
                            <td><?= $payment['updated_at'] ?? $payment['created_at'] ?></td>
                        </tr>
                        <?php
                    endforeach;
                else: ?>
                    <tr class="text-center">
                        <td colspan="6">No payment registred!</td>
                    </tr>
                    <?php
                endif;
                ?>
            </tbody>
        </table>

    </div>
    <!-- Em analise (value: on_hold) - Pago (value: paid) - Enviado (value: shipped) - Entregue (value: delivered) -->

</div>