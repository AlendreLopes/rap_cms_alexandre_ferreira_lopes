<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/dashboard">
                <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <a href="/dashboard/profile">
                <i class="fa-solid fa-id-card"></i> Profile
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
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

            <form id="editForm" action="/dashboard/user/update" method="POST" data-viacep>

                <input type="hidden" name="_method" value="PATCH" />

                <div class="row mb-3">

                    <div class="col-md-4">
                        <label class="form-label" for="username">Username</label>
                        <input class="form-control" id="username" name="username" type="text" value="<?= $user['username'] ?>" required/>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="email">Email</label>
                        <input class="form-control" id="email" name="email" type="text" value="<?= $user['email'] ?>" required/>
                    </div>

                    <div class="col-md-4">
                        <label class="form-label" for="phone">Phone</label>
                        <input class="form-control" id="phone" name="phone" type="text" value="<?= $user['phone'] ?>" required/>
                    </div>

                </div>

                <div class="mt-4 text-end">
                    <a class="btn btn-secondary" href="/dashboard/profile">Cancel</a>
                    <button class="btn btn-info" type="submit">
                        Edit profile
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>