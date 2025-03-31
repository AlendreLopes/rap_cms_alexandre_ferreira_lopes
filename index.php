<?php
/*
include("application/controller/filters/indexSessions.php");

function __autoload($classe)
{
    $pastas = array('filters', 'log', 'plugins');
    foreach ($pastas as $pasta) {
        if (file_exists("application/controller/{$pasta}/index{$classe}.php")) {
            include_once "application/controller/{$pasta}/index{$classe}.php";
        }
    }
}

$SQL = new Connect();
*/
?>
<!doctype html>

<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RAP CMS - Scrap Heap</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fontawesome-icons -->
     <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="/node_modules/datatables/media/css/jquery.dataTables.min.css">

    <!-- Sweetalert 2 -->
    <link rel="stylesheet" href="/node_modules/sweetalert2/dist/sweetalert2.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/public/assets/styles/main.css">

</head>

<body>

    <!-- Header -->
    <?php include("application/view/layouts/header.php"); ?>

    <!-- Carousel -->
    <?php include("application/view/layouts/carousel.php"); ?>

    <!-- Content -->
    <div class="container">
        <?php include("application/view/layouts/main.php"); ?>
    </div>

    <!-- Footer -->
    <?php include("application/view/layouts/footer.php"); ?>

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
     <script src="/node_modules/@fortawesome/fontawesome-free/js/all.css"></script>

    <!-- Main scripts -->
    <script src="/public/assets/js/main.js"></script>
    <script src="/public/assets/js/main.toggle.theme.js"></script>

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