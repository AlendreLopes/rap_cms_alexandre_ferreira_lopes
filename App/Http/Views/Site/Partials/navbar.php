<!-- Toggle icons -->
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
        <path
            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
            d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
        <path
            d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
            d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
</svg>

<nav class="navbar navbar-expand-lg fixed-top bg-body-tertiary">

    <div class="container-fluid">

        <a class="navbar-brand col-lg-3" href="/" title="Gift Shopping">
            <i class="fa-solid fa-gift" style="font-size:30px; color:blueviolet;"></i>
            Hello, <?= isset($_SESSION['rap_cms']) ? $_SESSION['rap_cms']['userName'] : (isset($_SESSION['rap_cms_adm']) ? $_SESSION['rap_cms_adm']['userName'] : 'guest') ?>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav col-lg-8 justify-content-lg-center">

                <li class="nav-item">
                    <a class="nav-link <?= sameUri('/') ? 'ative' : '' ?>" aria-current="page" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= sameUri('/product') ? 'ative' : '' ?>" href="/products">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Categories</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?= sameUri('/blog') ? 'ative' : '' ?>" href="/blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= sameUri('/contact') ? 'ative' : '' ?>" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= sameUri('/cart') ? 'ative' : '' ?>" href="/cart">
                        Cart (<?= isset($_SESSION['rap_cms_cart']['products']) ? count($_SESSION['rap_cms_cart']['products']) : 0 ?>)
                    </a>
                </li>
            </ul>

            <div class="d-lg-flex col-lg-4 justify-content-lg-end">

                <!-- Search -->
                <form role="search" class="me-1">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                        style="width: 180px">
                </form>
                <!-- Logged In -->
                <?php if (isset($_SESSION['rap_cms_adm'])): ?>
                    <!-- Adms Logge in -->
                    <div class="dropdown text-end mx-2">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle mt-1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user-tie" style="font-size:26px;"></i>
                        </a>
                        <ul class="dropdown-menu text-small dropdown-menu-end shadow">
                            <li><a class="dropdown-item"
                                    href="<?= $_SESSION['rap_cms_adm']['dashboard']['index'] ?>">Dashboard</a>
                            </li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item"
                                    href="<?= $_SESSION['rap_cms_adm']['dashboard']['profile'] ?>">Profile</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="<?= $_SESSION['rap_cms_adm']['dashboard']['logout'] ?>" method="POST">
                                    <button class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                <?php elseif (isset($_SESSION['rap_cms'])): ?>
                    <!-- User Logge in -->
                    <div class="dropdown text-end mx-2">
                        <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle mt-1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-solid fa-user" style="font-size:26px;"></i>
                        </a>
                        <ul class="dropdown-menu text-small dropdown-menu-end shadow">
                            <li><a class="dropdown-item"
                                    href="<?= $_SESSION['rap_cms']['dashboard']['index'] ?>">Dashboard</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item"
                                    href="<?= $_SESSION['rap_cms']['dashboard']['profile'] ?>">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="<?= $_SESSION['rap_cms']['dashboard']['logout'] ?>" method="POST">
                                    <button class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <div class="d-flex flex justify-content-lg-center">
                        <!-- Register -->
                        <a href="/register" class="btn btn-outline-success mx-1">
                            <i class="fa-solid fa-user-plus"></i> Register
                        </a>
                        <!-- Login -->
                        <a href="/login" class="align-items-center btn btn-outline-info mx-1">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Login
                        </a>
                    </div>
                <?php endif; ?>
                <!-- Toggle theme -->
                <div class="dropdown me-1 bd-mode-toggle">

                    <button class="btn btn-bd-primary dropdown-toggle d-flex align-items-center" id="bd-theme"
                        type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                        <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                            <use href="#circle-half"></use>
                        </svg>
                        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center"
                                data-bs-theme-value="light" aria-pressed="false">
                                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                    <use href="#sun-fill"></use>
                                </svg>
                                Light
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check2"></use>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center"
                                data-bs-theme-value="dark" aria-pressed="false">
                                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                    <use href="#moon-stars-fill"></use>
                                </svg>
                                Dark
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check2"></use>
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active"
                                data-bs-theme-value="auto" aria-pressed="true">
                                <svg class="bi me-2 opacity-50" width="1em" height="1em">
                                    <use href="#circle-half"></use>
                                </svg>
                                Auto
                                <svg class="bi ms-auto d-none" width="1em" height="1em">
                                    <use href="#check2"></use>
                                </svg>
                            </button>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </div>

</nav>