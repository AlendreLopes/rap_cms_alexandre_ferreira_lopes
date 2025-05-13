<?php //= dd($edit) ?>
<div class="container mt-1 p-3 rounded text-body-emphasis bg-body-secondary shadow">

    <div class="col-lg-12 mb-2">
        <h4>
            Product Edit
        </h4>
    </div>

    <div class="col-lg-12 mb-2">
        <?php if ($errors['errors']): ?>
            <div class="col-sm-12 text-center text-danger m-2">
                <?= $errors['errors']['products'] ?>
            </div>
        <?php endif; ?>
    </div>

    <form id="produtcForm" action="/administrators/products/update" method="POST" class="mb-4">

        <input type="hidden" name="_method" value="PATCH">

        <input type="hidden" name="id" value="<?= $edit['id'] ?>">

        <div class="row mb-2">
            <div class="col">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" class="form-control">
                    <option value="">Select Category</option>
                    <?php foreach ($categories as $categogy): ?>
                        <option value="<?= $categogy['id'] ?>" <?= ($edit['categoryId'] == $categogy['id']) ? 'selected':'' ?>><?= $categogy['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <label for="brand_id" class="form-label">Brand</label>
                <select name="brand_id" class="form-control">
                    <option value="">Select Brand</option>
                    <?php foreach ($brands as $brand): ?>
                        <option value="<?= $brand['id'] ?>" <?= ($edit['brandId'] == $brand['id']) ? 'selected' : '' ?>><?= $brand['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <label for="collor_id" class="form-label">Collor</label>
                <select name="collor_id" class="form-control">
                    <option value="">Select Collor</option>
                    <?php foreach ($collors as $collor): ?>
                        <option value="<?= $collor['id'] ?>" <?= ($edit['collorId'] == $collor['id']) ? 'selected' : '' ?>><?= $collor['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col">
                <label for="size_id" class="form-label">Size</label>
                <select name="size_id" class="form-control">
                    <option value="">Select size</option>
                    <?php foreach ($sizes as $size): ?>
                        <option value="<?= $size['id'] ?>" <?= ($edit['sizeId'] == $size['id']) ? 'selected' : '' ?>><?= $size['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" value="<?= $edit['name'] ?>">
            </div>
            <div class="col">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" id="slug" name="slug" class="form-control" value="<?= $edit['slug'] ?>">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-control">
                    <option value="">Select Status</option>
                    <option value="Draft" <?= ($edit['status'] == 'Draft') ? 'selected' : '' ?>>Draft</option>
                    <option value="Published" <?= ($edit['status'] == 'Published') ? 'selected' : '' ?>>Published</option>
                </select>
            </div>
            <div class="col">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" name="quantity" class="form-control" value="<?= $edit['quantity'] ?>">
            </div>
            <div class="col">
                <label for="price" class="form-label">Price</label>
                <input type="number" name="price" class="form-control" value="<?= $edit['price'] ?>">
            </div>
            <div class="col">
                <label for="discount" class="form-label">Discount</label>
                <input type="number" name="discount" class="form-control" value="<?= $edit['discount'] ?>">
            </div>
        </div>

        <div class="row mb-2">
            <div class="col">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" rows="15" cols="5" class="form-control"><?= $edit['description'] ?></textarea>
            </div>
        </div>

        <div class="row mb-2">

            <div class="col text-end">
                <a href="/administrators/products" class="btn btn-outline-secondary">Cancel</a>

                <button class="btn btn-outline-success">Update</button>
            </div>

        </div>

    </form>

</div>