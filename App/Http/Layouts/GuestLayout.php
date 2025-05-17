<!doctype html>

<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RAP CMS - Scrap Heap</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fontawesome-icons -->
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="/node_modules/datatables/media/css/jquery.dataTables.min.css">

    <!-- Sweetalert 2 -->
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- Smart Cart Css -->
    <!-- <link href="/node_modules/jquery-smartcart/dist/css/smart_cart.min.css"> -->

    <!-- CSS Main -->
    <link rel="stylesheet" href="/public/styles/main.css">

    <!-- CSS Main Partial -->
    <link rel="stylesheet" href="public/styles/main.partials.css">

</head>

<body>

    <!-- Header -->
    <header>

        <?php require httpControllers('Site/Partials/header.php'); ?>

        <!-- Carousel -->
        <section class="mt-5 pt-3">
            <?php require httpControllers('Site/Partials/carousel.php'); ?>
        </section>

    </header>

    <!-- Slot Main Content -->
    <main class="container">
        <?php require httpViews($views); ?>
    </main>

    <!-- Footer -->
    <footer class="w-100 mt-5">
        <!-- Footer Upper -->
        <?php require httpViews('Site/Partials/footer.upper.php'); ?>
        <!-- Footer Lower -->
        <?php require httpViews('Site/Partials/footer.lower.php'); ?>
    </footer>

    <!-- Scripts -->

    <!-- Jquery JS -->
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" src="/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sweet alert js -->
    <script type="text/javascript" src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- Fontawesome icons -->
    <script type="text/javascript" src="/node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>

    <!-- Smart Cart -->
     <!-- <script type="text/javascript" src="/node_modules/jquery-smartcart/dist/js/jquery.smartCart.min.js"></script> -->

    <!-- Main scripts -->
    <script src="/public/js/main.js"></script>

    <!-- Main scripts -->
    <script src="/public/js/main.toggle.theme.js"></script>

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

</body>

</html>