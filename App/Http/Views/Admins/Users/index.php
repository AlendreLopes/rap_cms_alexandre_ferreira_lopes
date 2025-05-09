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
                        <td><?= $user['username'] ?></td>
                        <td>
                            <a href="/administrators/users/show?id=<?= $user['id'] ?>"
                                title="Show details of <?= $user['username'] ?>" class="btn btn-outline-info btn-sm">
                                <?= $user['email'] ?>
                            </a>
                        </td>
                        <td><?= $user['phone'] ?? '00 0 0000-0000' ?></td>
                        <td><?= ($user['status'] == 10) ? "Active" : "Inactive" ?></td>
                        <td><?= ($user['profile_completed']) ? "Completed" : "Incomplete" ?></td>
                        <td><?= $user['profile_photo_path'] ?? "Empty" ?></td>
                    </tr>
                <?php endforeach; ?>

                <?php /* for ($i=0; $i < 30; $i++): ?>
                <tr>
                    <td><?= $faker->name() ?></td>
                    <td><?= $faker->unique()->email() ?></td>
                    <td><?= $faker->phoneNumber() ?></td>
                    <td><?= $faker->randomKey([0 => 0, 10 => 10]) ?></td>
                    <td><?= $faker->randomKey([0 => 0, 1 => 1]) ?></td>
                    <td><img src="<?= $faker->fakeImgUrl($width = 30, $height = 30, $text = 'avatar') ?>" alt="" srcset=""></td>
                </tr>
                <?php endfor; */ ?>
            </tbody>
        </table>

    </div>

</div>