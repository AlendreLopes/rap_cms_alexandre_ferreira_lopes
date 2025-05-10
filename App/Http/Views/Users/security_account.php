<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/dashboard">
                <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
            </a>
        </li>
        <li class="breadcrumb-item active" aria-current="page"><i class="fa-solid fa-user-secret me-2"></i> Security Account</li>
    </ol>
</nav>

<div class="form-signin w-100 m-auto">

    <div class="col-lg-12 px-0">

        <form id="securityForm" action="/dashboard/user/profile/security" method="POST">

            <input type="hidden" name="_method" value="PATCH">

            <h3 class="display-6 fst-italic text-center"><i class="fa-solid fa-user-secret me-2" style="font-size:30px; color:blueviolet;"></i> Security Account</h3>
            
            <h3 class="fst-italic text-center">Change your password</h3>

            <?php if ($errors['errors']): ?>
                <div class="col-sm-12 text-center text-danger m-2">
                    <?= $errors['errors']['password'] ?>
                </div>
            <?php endif; ?>

            <div class="form-control mb-2">
                <label class="form-label" for="password"><i id="eyeSlash" class="fas fa-eye-slash"
                        style="cursor: pointer;"></i> Password</label>
                <input name="password" id="password" type="password" class="form-control" placeholder="Password"
                    required>
            </div>

            <div class="form-control mb-2">
                <label class="form-label" for="password_confirm">Password Confirm</label>
                <input name="password_confirm" id="password_confirm" type="password" class="form-control"
                    placeholder="Password Confirm" required>
            </div>

            <button class="btn btn-outline-secondary w-100 py-2" type="submit">
                <i class="fa-solid fa-key"></i> &nbsp; Update password &nbsp; <i class="fa-solid fa-door-closed"></i>
            </button>


        </form>

    </div>

</div>