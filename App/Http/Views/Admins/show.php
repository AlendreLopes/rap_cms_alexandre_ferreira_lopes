<div class="container bg-secondary-subtle mt-2 pt-1 px-3 shadow rounded">

    <div class="text-center mb-4">
        Administrator
        <h3 class="py-1"><?= $admin['username'] ?></h3>
        <small><?= $admin['email'] ?></small>

    </div>

    <div class="row mx-auto mb-2">

        <div class="card-shadow-sm">

            <div class="card-header text-center mb-2">

                <h5>
                    <i class="fa-solid fa-id-card" style="font-size:30px; color:blueviolet;"></i>
                    Personal Information <?= "ID Admin {$admin['id']} ID Session {$_SESSION['rap_cms_adm']['userId']}" ?>
                </h5>
                <?php if ($admin['id'] === $_SESSION['rap_cms_adm']['userId']): ?>
                    <a href="/administrators/edit" class="btn btn-outline-success btn-sm">
                        <i class="fa fa-edit" aria-hidden="true"></i> Edit
                    </a>
                    <?php
                else: ?>
                    Not authorized to <i class="fa fa-edit" aria-hidden="true"></i>!
                    <?php
                endif;
                ?>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col">Name:</div>
                    <div class="col-6"><?= $admin['username'] ?></div>
                </div>
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col">Email:</div>
                    <div class="col-6"><?= $admin['email'] ?></div>
                </div>
                <div class="row">
                    <div class="col-5"></div>
                    <div class="col">Phone:</div>
                    <div class="col-6"><?= $admin['phone'] ?? '(00) 0 0000-0000' ?></div>
                </div>
            </div>

        </div>

    </div>

    <div class="row mx-auto">

        <div class="card-shadow-sm p-2">

            <div class="card-header text-center">

                <h5>
                    <i class="fa-solid fa-user-secret" style="font-size:30px; color:blueviolet;"></i>
                    Security Account
                </h5>
                <?php if ($admin['id'] === $_SESSION['rap_cms_adm']['userId']): ?>
                    <a href="/administrators/security" class="btn btn-outline-success btn-sm">
                        <i class="fa fa-edit" aria-hidden="true"></i> Edit
                    </a>
                    <?php
                else: ?>
                    Not authorized to <i class="fa fa-edit" aria-hidden="true"></i>!
                    <?php
                endif;
                ?>
            </div>

        </div>

    </div>

</div>