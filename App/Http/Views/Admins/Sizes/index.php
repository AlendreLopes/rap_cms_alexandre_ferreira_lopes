<div class="card">

    <div class="card-header bg-secondary-subtle">
        <div class="row">
            <div class="col-2">
                <i class="fas fa-table me-1"></i>
                Sizes
            </div>
            <div class="col-10 text-end">
                <a href="/administrators/sizes/create" class="btn btn-outline-success align-self-end">Create</a>
            </div>
        </div>
    </div>

    <div class="card-body bg-secondary-subtle">

        <table class="table table-secondary table-striped table-hover bg-secondary-subtle">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Brand</th>
                    <th>Actions</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($sizes as $brand): ?>
                    <tr>
                        <td><?= $brand['name'] ?></td>
                        <td class="text-center">

                            <a href="/administrators/sizes/edit?id=<?= $brand['id'] ?>"
                                class="btn btn-outline-success btn-sm">Edit</a>

                            <a href="#" onclick="deleteItem(<?= $brand['id'] ?>)"
                                class="btn btn-outline-danger btn-sm">Delete</a>

                            <form id="<?= $brand['id'] ?>" action="/administrators/sizes/delete" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $brand['id'] ?>">
                            </form>

                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</div>