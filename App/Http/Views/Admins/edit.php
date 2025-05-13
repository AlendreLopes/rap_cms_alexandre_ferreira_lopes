<div class="container bg-secondary-subtle mt-2 pt-1 px-3 shadow rounded">

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/administrators/show">
                    <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-id-card"></i> Edit Personal Information</li>
        </ol>
    </nav>

    <div class="col-md-12">

        <div class="card-shadow-sm p-2">

            <div class="card-header">

                <h5 class="text-center mb-5 my-2">
                    <i class="fa-solid fa-id-card"></i> Edit Personal Information
                </h5>

            </div>

            <div class="card-body">

                <form id="editForm" action="/administrators/update" method="POST" data-viacep>

                    <input type="hidden" name="_method" value="PATCH" />

                    <div class="row mb-3">

                        <div class="col-md-4">

                            <label class="form-label" for="username">Username</label>
                            <input class="form-control" id="username" name="username" type="text"
                                value="<?= $admin['username'] ?>" required />

                        </div>

                        <div class="col-md-4">

                            <label class="form-label" for="email">Email</label>
                            <input class="form-control" id="email" name="email" type="text"
                                value="<?= $admin['email'] ?>" required />

                        </div>

                        <div class="col-md-4">

                            <label class="form-label" for="phone">Phone</label>
                            <input class="form-control" id="phone" name="phone" type="text"
                                value="<?= $admin['phone'] ?>" required />

                        </div>

                    </div>

                    <div class="mt-4 text-end">

                        <a class="btn btn-secondary" href="/administrators/show">Cancel</a>

                        <button class="btn btn-info" type="submit">
                            Edit profile
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>