<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/dashboard">
                <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            <i class="fa-solid fa-id-card"></i> Profile
        </li>
    </ol>
</nav>

<div class="card-shadow-sm p-2">

    <div class="card-header">
        <h5 class="text-center my-2">
            <i class="fa-solid fa-id-card mt-3 me-2" style="font-size:30px; color:blueviolet;"></i> Personal Information 
            <a href="/dashboard/edit" class="btn btn-outline-info"><i class="fa fa-edit" aria-hidden="true"></i> Edit</a>
        </h5>
    </div>

    <div class="card-body">
        <div class="row mt-5 mb-3">
            <div class="col-3"></div>
            <div class="col">Name:</div>
            <div class="col-8"><?= $user['username'] ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-3"></div>
            <div class="col">Email:</div>
            <div class="col-8"><?= $user['email'] ?></div>
        </div>
        <div class="row mb-3">
            <div class="col-3"></div>
            <div class="col">Phone:</div>
            <div class="col-8"><?= $user['phone'] ?? '(00) 0 0000-0000' ?></div>
        </div>
    </div>

</div>