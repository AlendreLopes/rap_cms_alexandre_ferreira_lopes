<div class="form-signin w-100 m-auto">

    <div class="d-block text-center mb-3">
        <a class="navbar-brand" href="/" title="Back to Gift Shopping">
            <i class="fa-solid fa-gift" style="font-size:40px; color:blueviolet;"></i>
        </a>
    </div>

    <form id="userRecoverForm" action="" method="POST">

        <h4 class="h4 mb-3 fw-normal">Please fill your email!</h4>

        <div class="form-control mb-2">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autofocus require>
        </div>

        <div class="form-check text-end my-3">
            <a href="/login">
                Alread registred Sign In here!
            </a>
        </div>

        <button class="btn btn-outline-secondary w-100 py-2" type="submit">
            <i class="fa-solid fa-envelope"></i> Recover <i class="fa-solid fa-envelopes-bulk"></i>
        </button>

    </form>

</div>