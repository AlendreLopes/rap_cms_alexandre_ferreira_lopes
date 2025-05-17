<div class="card mb-4">

    <div class="card-header bg-secondary-subtle">
        <i class="fas fa-table me-1"></i>
        Orders
    </div>

    <div class="card-body bg-secondary-subtle">

        <table class="table table-secondary table-striped table-hover bg-secondary-subtle">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Order date</th>
                    <th>Delivered at</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Order date</th>
                    <th>Delivered at</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                if ($orders):
                    foreach ($orders as $order): ?>
                        <tr>
                            <td>User Name</td>
                            <td>Product Name</td>
                            <td>Product Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                            <td>Order date</td>
                            <td>Delivered at</td>
                        </tr>
                        <?php
                    endforeach;
                else:
                    ?>
                    <tr class="text-center">
                        <td colspan="7">No order registred!</td>
                    </tr>
                    <?php
                endif;
                ?>
            </tbody>
        </table>

    </div>
    Em analise (value: on_hold) - Pago (value: paid) - Enviado (value: shipped) - Entregue (value: delivered)
</div>