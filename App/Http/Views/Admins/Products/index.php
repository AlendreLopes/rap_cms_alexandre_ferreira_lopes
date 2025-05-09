<div class="card mb-4">

    <div class="card-header bg-secondary-subtle">
        <i class="fas fa-table me-1"></i>
        Products
    </div>

    <div class="card-body bg-secondary-subtle">

        <table class="table table-secondary table-striped table-hover bg-secondary-subtle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <th>User Name</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Order date</th>
                        <th>Delivered at</th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>