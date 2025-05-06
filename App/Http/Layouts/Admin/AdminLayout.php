<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fontawesome-icons -->
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="/node_modules/datatables/media/css/jquery.dataTables.min.css">

    <!-- Sweetalert 2 -->
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/public/styles/admin/style.css">

</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Dashboard</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">

        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

                <div class="sb-sidenav-menu">

                    <div class="nav">

                        <div class="sb-sidenav-menu-heading">Core</div>

                        <a class="nav-link" href="/administrators">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="/administrators/products">
                            <div class="sb-nav-link-icon"><i class="fa-brands fa-product-hunt"></i></div>
                            Products
                        </a>

                        <a class="nav-link" href="/administrators/orders">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-basket-shopping"></i></div>
                            Orders
                        </a>

                        <a class="nav-link" href="/administrators/payments">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                            Payments
                        </a>

                        <a class="nav-link" href="/administrators/users">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users"></i></div>
                            Users
                        </a>

                        <div class="sb-sidenav-menu-heading">Interface</div>

                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">

                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseAuth" aria-expanded="false"
                                    aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>

                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">

                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>

                                </div>

                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                                    data-bs-target="#pagesCollapseError" aria-expanded="false"
                                    aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>

                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                                    data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>

                            </nav>

                        </div>

                        <div class="sb-sidenav-menu-heading">Addons</div>

                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>

                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a>

                    </div>

                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>

            </nav>

        </div>

        <div id="layoutSidenav_content">

            <?= require httpViews($views) ?>

        </div>

    </div>

    <!-- Jquery JS -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <!-- DataTables JS -->
    <script src="/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sweet alert js -->
    <script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- Fontawesome icons -->
    <script src="/node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>

    <!-- Main scripts -->
    <script src="/public/js/main.js"></script>

    <!-- Blueimp File Upload -->
    <!-- <script src="/node_modules/blueimp-file-upload/js/jquery.fileupload.js"></script> -->

    <!-- Session success -->
    <?php if (isset($_SESSION['success'])): ?>
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "<?= $_SESSION['success'] ?>",
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    <?php endif; ?>
    
    <!-- Session Error -->
    <?php if (isset($_SESSION['error'])): ?>
        <script>
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "<?= $_SESSION['error'] ?>",
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    <?php endif; ?>

    <script src="/public/js/admin/scripts.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>

    <script src="/public/js/admin/demo/chart-area-demo.js"></script>
    <script src="/public/js/admin/demo/chart-bar-demo.js"></script>

    <script src="/public/js/admin/datatables-simple-demo.js"></script>

</body>

</html>