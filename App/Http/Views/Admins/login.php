<div class="form-signin w-100 m-auto">

    <div class="d-block text-center mb-3">
        <a class="navbar-brand" href="/" title="Back to Gift Shopping">
            <i class="fa-solid fa-gift" style="font-size:40px; color:blueviolet;"></i>
        </a>
    </div>

    <form id="userLoginForm" action="/admins/login/store" method="POST">

        <h1 class="h3 mb-3 fw-normal text-center">
            Administrators
            <br>
            Sign in
        </h1>

        <div class="form-control mb-2">
            <label class="form-label" for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com"
                value="<?= $errors['oldData']['email'] ?? '' ?>" autofocus require>
        </div>

        <?php if ($errors['errors']): ?>
            <div class="col-sm-12 text-center text-danger m-2">
                <?= $errors['errors']['email'] ?>
            </div>
        <?php endif; ?>

        <div class="form-control mb-2">
            <label class="form-label" for="password"><i id="eyeSlash" class="fas fa-eye-slash"
                    style="cursor: pointer;"></i> Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                value="<?= $errors['oldData']['password'] ?? '' ?>" require>
        </div>

        <button class="btn btn-outline-primary w-100 py-2" type="submit">
            <i class="fa-solid fa-lock"></i> &nbsp; Sign in &nbsp; <i class="fa-solid fa-lock-open"></i>
        </button>

        <div class="form-check text-end my-3">
            <a href="/admins/register">
                Already registred Sign Up!
            </a>
        </div>

        <div class="form-check text-end my-3">
            <a href="/admins/forgot-password">
                Forgot password?
            </a>
        </div>

    </form>

</div>