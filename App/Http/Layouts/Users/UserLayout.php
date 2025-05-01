<!doctype html>

<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RAP CMS - Users</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fontawesome-icons -->
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="/node_modules/datatables/media/css/jquery.dataTables.min.css">

    <!-- Sweetalert 2 -->
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- Bluimp Css -->
    <link rel="stylesheet" href="/node_modules/blueimp-file-upload/css/jquery.fileupload.css">

    <!-- CSS Main -->
    <link rel="stylesheet" href="/public/styles/main.css">

    <!-- CSS Main Partial -->
    <link rel="stylesheet" href="public/styles/main.partials.css">

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <!-- Header -->
    <header>
        <?php require httpControllers('Site/Partials/header.php'); ?>
    </header>

    <!-- Slot Main Content -->
    <main class="mx-auto w-100 mt-3 py-5">
        <?php require httpDashboard($views); ?>
    </main>

    <!-- Footer -->
    <footer class="fixed-bottom w-100 mt-5">
        <!-- Footer Lower -->
        <?php require httpControllers('Site/Partials/footer.lower.php'); ?>
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
    <script src="/node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>

    <!-- Main scripts -->
    <script src="/public/js/main.js"></script>

    <!-- Main scripts -->
    <script src="/public/js/main.toggle.theme.js"></script>

    <!-- Blueimp File Upload -->
    <!-- <script src="/node_modules/blueimp-file-upload/js/jquery.fileupload.js"></script> -->

    <!-- Session success -->
    <?php if (isset($_SESSION['success'])): ?>
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

    <!-- Session Error -->
    <?php if (isset($_SESSION['error'])): ?>
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