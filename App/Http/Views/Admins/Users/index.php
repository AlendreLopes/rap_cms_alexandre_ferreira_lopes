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
                    <th>Profile</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Profile</th>
                    <th>Photo</th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <a href="/administrators/users/show?id=<?= $user['id'] ?>"
                                title="Show details of <?= $user['username'] ?>" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">
                                <?= $user['username'] ?>
                            </a>
                        </td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['phone'] ?? '00 0 0000-0000' ?></td>
                        <td><?= ($user['status'] == 10) ? "Active" : "Inactive" ?></td>
                        <td><?= ($user['profile_completed']) ? "Completed" : "Incomplete" ?></td>
                        <td><?= $user['profile_photo_path'] ?? "Empty" ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>

    </div>

</div>