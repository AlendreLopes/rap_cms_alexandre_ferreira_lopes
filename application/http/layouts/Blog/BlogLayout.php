<!doctype html>

<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RAP CMS - <?= $title ?? 'Blog' ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fontawesome-icons -->
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="/node_modules/datatables/media/css/jquery.dataTables.min.css">

    <!-- Sweetalert 2 -->
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- CSS Main -->
    <link rel="stylesheet" href="/resources/styles/main.css">
    <!-- CSS Main -->
    <link rel="stylesheet" href="/resources/styles/main.partials.css">

</head>

<body>

    <!-- Header -->
    <header>
        <?php require ViewsController::views('site/partials/header.php'); ?>
    </header>

    <!-- Slot Main Content -->
    <main class="container mt-3 py-5">
        <?php require ViewsController::views($views); ?>
    </main>

    <!-- Footer -->
    <footer class="w-100 mt-5">
        <!-- Footer Upper -->
        <?php require ViewsController::views('site/partials/footer.upper.php'); ?>
        <!-- Footer Lower -->
        <?php require ViewsController::views('site/partials/footer.lower.php'); ?>
    </footer>

    <!-- Scripts -->
    <!-- Jquery JS -->
    <script src="/node_modules/jquery/dist/jquery.min.js"></script>

    <!-- DataTables JS -->
    <script src="/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sweet alert js -->
    <script src="/node_modules/sweetalert2/dist/sweetalert2.min.js"></script>

    <!-- Fontawesome icons -->
    <script src="/node_modules/@fortawesome/fontawesome-free/js/all.min.css"></script>

    <!-- Main scripts -->
    <script src="/resources/js/main.js"></script>
    <script src="/resources/js/main.toggle.theme.js"></script>

    <?php if ($title == 'Create Post'): ?>
        <!-- Validate Form Create Post -->
        <script src="/node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
        <script>$("#blogCreateForm").validate();</script>
        <!-- <script src="/resources/js/validation/jquery-validation-blog-create.js"></script> -->
    <?php endif; ?>

    <!-- Blueimp File Upload -->
    <!-- <script src="/node_modules/blueimp-file-upload/js/jquery.fileupload.js"></script> -->

    <?php if (isset($_SESSION['success'])): ?>
        <!-- Session success -->
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

    <?php if (isset($_SESSION['error'])): ?>
        <!-- Session Error -->
        <script>
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

</body>

</html>