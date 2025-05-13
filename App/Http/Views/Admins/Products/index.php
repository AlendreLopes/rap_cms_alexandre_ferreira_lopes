<div class="card">

    <div class="card-header bg-secondary-subtle">
        <div class="row">
            <div class="col-2">
                <i class="fas fa-table me-1"></i>
                Products
            </div>
            <div class="col-10 text-end">
                <a href="/administrators/products/create" class="btn btn-outline-success align-self-end">Create</a>
            </div>
        </div>
    </div>

    <div class="card-body bg-secondary-subtle">

        <table class="table table-secondary table-striped table-hover bg-secondary-subtle">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Product</th>
                    <th>Slug</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Collor</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Product</th>
                    <th>Slug</th>
                    <th>Category</th>
                    <th>Brand</th>
                    <th>Collor</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Action</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td class="text-center">
                            <i class="fa-solid fa-image"></i>
                        </td>
                        <td>
                            <?= $product['status'] ?>
                        </td>
                        <td>
                            <?= $product['name'] ?>
                        </td>
                        <td>
                            <?= $product['slug'] ?>
                        </td>
                        <td>
                            <?= $product['categories'] ?>
                        </td>
                        <td>
                            <?= $product['brands'] ?>
                        </td>
                        <td>
                            <?= $product['collors'] ?>
                        </td>
                        <td>
                            <?= $product['sizes'] ?>
                        </td>
                        <td class="text-center"><?= $product['quantity'] ?></td>
                        <td class="text-center">
                            <i class="fa-solid fa-brazilian-real-sign"></i> <?= currency($product['price']) ?>
                        </td>
                        <td class="text-center"><i class="fa-solid fa-percent"></i> <?= $product['discount'] ?></td>
                        <td class="text-center">

                            <a href="/administrators/products/show?id=<?= $product['id'] ?>"
                                title="Show details of product: <?= $product['name'] ?>"
                                class="btn btn-outline-info btn-sm">
                                <i class="fa-solid fa-glasses"></i>
                            </a>

                            <a href="/administrators/products/edit?id=<?= $product['id'] ?>"
                                class="btn btn-outline-success btn-sm">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>

                            <a href="#" onclick="deleteItem(<?= $product['id'] ?>)" class="btn btn-outline-danger btn-sm">
                                <i class="fa fa-drivers-license" aria-hidden="true"></i>
                            </a>

                            <form id="<?= $product['id'] ?>" action="/administrators/products/delete" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>