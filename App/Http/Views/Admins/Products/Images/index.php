<div class="card mb-4">

    <div class="card-header bg-secondary-subtle">
        <div class="row">
            <div class="col-2">
                <i class="fas fa-table me-1"></i>
                Products Images
            </div>
            <!-- <div class="col-10 text-end">
                <a href="/administrators/products/images/create" class="btn btn-outline-success align-self-end"><i class="fa fa-upload" aria-hidden="true"></i> Upload</a>
            </div> -->
        </div>
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
                <?php foreach ($images as $image): ?>
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