<div class="card mb-4">

    <div class="card-header bg-secondary-subtle">
        <i class="fas fa-table me-1"></i>
        Users
    </div>

    <div class="card-body bg-secondary-subtle">

        <table class="table table-secondary table-striped table-hover bg-secondary-subtle">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($admins as $user): ?>
                    <tr>
                        <td>
                            <a href="/administrators/show?id=<?= $user['id'] ?>"
                                title="Show details of <?= $user['username'] ?>" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                                <?= $user['username'] ?>
                            </a>
                        </td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone'] ?? '00 0 0000-0000' ?></td>
                        <td><?= ($user['status'] == 10) ? "Active" : "Inactive" ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>

</div>