<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - <?= $title ?? 'SB Admin' ?></title>
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

    <!-- CSS Main -->
    <link rel="stylesheet" href="/public/styles/main.css">

</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="/">RAP CMS Site</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <!-- Navbar-->
        <ul class="navbar-nav mx-auto me-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa-solid fa-user-tie" style="font-size:26px;"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item"
                            href="<?= $_SESSION['rap_cms_adm']['dashboard']['profile'] ?>">Settings</a>
                    </li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li>
                        <form action="<?= $_SESSION['rap_cms_adm']['dashboard']['logout'] ?>" method="POST">
                            <input type="hidden" name="logout">
                            <button class="dropdown-item"
                                href="<?= $_SESSION['rap_cms_adm']['dashboard']['logout'] ?>">Logout</button>
                        </form>
                    </li>
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

                        <div class="sb-sidenav-menu-heading">Interface</div>

                        <a class="nav-link" href="/administrators/orders">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-basket-shopping"></i></div>
                            Orders
                        </a>

                        <a class="nav-link" href="/administrators/payments">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-money-check-dollar"></i></div>
                            Payments
                        </a>

                        <a class="nav-link" href="/administrators/products">
                            <div class="sb-nav-link-icon"><i class="fa-brands fa-product-hunt"></i></div>
                            Products
                        </a>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Products Dep
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <!-- <a class="nav-link" href="/administrators/products/images">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-image"></i></div>
                                    Images
                                </a> -->

                                <a class="nav-link" href="/administrators/brands">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-signature"></i></div>
                                    Brands
                                </a>

                                <a class="nav-link" href="/administrators/categories">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-bars-staggered"></i></div>
                                    Categories
                                </a>

                                <a class="nav-link" href="/administrators/collors">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-palette"></i></div>
                                    Collors
                                </a>

                                <a class="nav-link" href="/administrators/sizes">
                                    <div class="sb-nav-link-icon"><i class="fa-solid fa-arrows-to-circle"></i></div>
                                    Sizes
                                </a>
                            </nav>
                        </div>

                        <a class="nav-link" href="/administrators/users">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-users-gear"></i></div>
                            Users
                        </a>


                    </div>

                </div>

                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= $_SESSION['rap_cms_adm']['userName'] ?>
                </div>

            </nav>

        </div>

        <div id="layoutSidenav_content" class="bg-secondary">

            <?php require httpViews($views) ?>

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

    <?php if (isset($title) && $title == 'Admin Edit'): ?>
        <!-- Jquery Mask Input -->
        <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
        <script src="/public/js/validations/dashboard/jquery-validation-user-profile.js"></script>
        <!-- Jquery Mask Input -->
        <script src="/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script>
            $(function () {
                $('#phone').mask('(00) 0 0000-0000');
            });
        </script>
    <?php endif; ?>

    <?php if (isset($title) && $title == 'Admin Security Account'): ?>
        <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
        <script src="/public/js/validations/dashboard/jquery-validation-user-security-account.js"></script>
    <?php endif; ?>

    <?php if (isset($title) && $title == 'Products' || $title == 'Product Show' || $title == 'Products Images' || $title == 'Brands' || $title == 'Categories' || $title == 'Collors'): ?>
        <script>
            function deleteItem(id) {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(id).submit();
                    }
                });
            }
        </script>
    <?php endif; ?>

    <?php if (isset($title) && $title == 'Product Create' || $title == 'Product Edit'): ?>
        <!-- Jquery Mask Input -->
        <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
        <script src="/public/js/validations/dashboard/jquery-validation-products.js"></script>
        <script>
            $(function () {
                // Type as you slug
                $("#name").keyup(function () {
                    var Text = $(this).val();
                    Text = Text.toLowerCase();
                    Text = Text.replace(/[^\w ]+/g, "");
                    Text = Text.replace(/ +/g, "-");
                    $("#slug").val(Text);
                });
            });
        </script>
    <?php endif; ?>

    <?php if (isset($title) && $title == 'Create Image' || $title == 'Edit Image'): ?>

        <!-- the fileinput plugin styling CSS file -->
        <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all"
            rel="stylesheet" type="text/css" />

        <!-- if using RTL (Right-To-Left) orientation, load the RTL CSS file after fileinput.css by uncommenting below -->
        <!-- link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput-rtl.min.css" media="all" rel="stylesheet" type="text/css" /-->

        <!-- buffer.min.js and filetype.min.js are necessary in the order listed for advanced mime type parsing and more correct
             preview. This is a feature available since v5.5.0 and is needed if you want to ensure file mime type is parsed 
             correctly even if the local file's extension is named incorrectly. This will ensure more correct preview of the
             selected file (note: this will involve a small processing overhead in scanning of file contents locally). If you 
             do not load these scripts then the mime type parsing will largely be derived using the extension in the filename
             and some basic file content parsing signatures. -->
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/buffer.min.js"
            type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/filetype.min.js"
            type="text/javascript"></script>

        <!-- piexif.min.js is needed for auto orienting image files OR when restoring exif data in resized images and when you
            wish to resize images before upload. This must be loaded before fileinput.min.js -->
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/piexif.min.js"
            type="text/javascript"></script>

        <!-- sortable.min.js is only needed if you wish to sort / rearrange files in initial preview. 
            This must be loaded before fileinput.min.js -->
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/plugins/sortable.min.js"
            type="text/javascript"></script>

        <!-- the main fileinput plugin script JS file -->
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>

        <!-- following theme script is needed to use the Font Awesome 5.x theme (`fa5`). Uncomment if needed. -->
        <!-- script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/themes/fa5/theme.min.js"></script -->

        <!-- optionally if you need translation for your language then include the locale file as mentioned below (replace LANG.js with your language locale) -->
        <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/locales/LANG.js"></script>

        <script>
            $(function () {
                $.fn.fileinputBsVersion = "3.3.7"; // if not set, this will be auto-derived

                // initialize plugin with defaults
                // $("#file").fileinput();

                // with plugin options
                $("#file").fileinput({
                    'maxFileCount': 10,
                    'allowedFileExtensions': ["jpg", "jpeg", "png", "webp"],
                    'maxFilePreviewSize': 2048,
                    'showUpload': true,
                    'previewFileType': 'any',
                    "elErrorContainer": "#errorBlock"
                });
            });
        </script>

    <?php endif; ?>

    <?php if (isset($title) && $title == 'Brand Create' || $title == 'Brand Edit' || $title == 'Category Create' || $title == 'Category Edit' || $title == 'Collor Create' || $title == 'Collor Edit' || $title == 'Size Create' || $title == 'Size Edit'): ?>
        <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
        <script src="/public/js/validations/dashboard/jquery-validation-products-dependencies.js"></script>
    <?php endif; ?>

    <?php if (isset($title) && $title == 'Payment Create' || $title == 'Payment Edit'): ?>
        <!-- Jquery Mask Input -->
        <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
        <script src="/public/js/validations/dashboard/jquery-validation-payments.js"></script>
        <!-- Jquery Mask Input -->
        <script src="/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script>
            $(function () {
                $('#phone').mask('(00) 0 0000-0000');
            });
        </script>
    <?php endif; ?>

    <?php if (isset($title) && $title == 'Order Create' || $title == 'Order Edit'): ?>
        <!-- Jquery Mask Input -->
        <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
        <script src="/public/js/validations/dashboard/jquery-validation-orders.js"></script>
        <!-- Jquery Mask Input -->
        <script src="/node_modules/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
        <script>
            $(function () {
                $('#phone').mask('(00) 0 0000-0000');
            });
        </script>
    <?php endif; ?>

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