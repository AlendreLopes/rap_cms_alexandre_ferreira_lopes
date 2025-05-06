<div class="form-signin w-100 m-auto">

    <div class="d-block text-center mb-3">
        <a class="navbar-brand" href="/" title="Back to Gift Shopping">
            <i class="fa-solid fa-gift" style="font-size:40px; color:blueviolet;"></i>
        </a>
    </div>

    <div class="col-lg-12 px-0">

        <form id="userRegister" action="/admins/register/store" method="POST">
            
            <input type="hidden" name="_method" value="PUT">

            <h3 class="display-6 fst-italic text-center">
                Administrators
                <br>
                Register
            </h3>

            <?php if ($errors['errors']): ?>
                <div class="col-sm-12 text-center text-danger m-2">
                    <?= $errors['errors']['email'] ?>
                </div>
            <?php endif; ?>

            <div class="form-control mb-2">
                <label class="form-label" for="username">Username</label>
                <input name="username" type="text" class="form-control" placeholder="username"
                    aria-describedby="inputGroupPrepend" required>
            </div>

            <div class="form-control mb-2">
                <label class="form-label" for="email">Email address</label>
                <input name="email" type="email" class="form-control" placeholder="name@example.com" required>
            </div>

            <div class="form-control mb-2">
                <label class="form-label" for="password"><i id="eyeSlash" class="fas fa-eye-slash" style="cursor: pointer;"></i> Password</label>
                <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-control mb-2">
                <label class="form-label" for="password_confirm">Password Confirm</label>
                <input name="password_confirm" id="password_confirm" type="password" class="form-control" placeholder="Password Confirm"
                    required>
            </div>

            <button class="btn btn-outline-success w-100 py-2" type="submit">
                <i class="fa-solid fa-door-closed"></i> &nbsp; Register &nbsp; <i class="fa-solid fa-door-open"></i>
            </button>

            <div class="form-check text-end my-3">
                <a href="/admins/login">
                    Alread registred Sign In here!
                </a>
            </div>

            <div class="form-check text-end my-3">
                <a href="/forgot-password">
                    Forgot password?
                </a>
            </div>

        </form>
    </div>

</div>