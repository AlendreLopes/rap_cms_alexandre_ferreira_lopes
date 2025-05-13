<div class="card">

    <div class="card-header bg-secondary-subtle">
        <div class="row">
            <div class="col-2">
                <i class="fas fa-table me-1"></i>
                Categories
            </div>
            <div class="col-10 text-end">
                <a href="/administrators/categories/create" class="btn btn-outline-success align-self-end">Create</a>
            </div>
        </div>
    </div>

    <div class="card-body bg-secondary-subtle">

        <table class="table table-secondary table-striped table-hover bg-secondary-subtle">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Category</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($categories as $category): ?>
                    <tr>
                        <td><?= $category['name'] ?></td>
                        <td class="text-center">

                            <a href="/administrators/categories/edit?id=<?= $category['id'] ?>"
                                class="btn btn-outline-success btn-sm">Edit</a>

                            <a href="#" onclick="deleteItem(<?= $category['id'] ?>)"
                                class="btn btn-outline-danger btn-sm">Delete</a>

                            <form id="<?= $category['id'] ?>" action="/administrators/categories/delete" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $category['id'] ?>">
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>