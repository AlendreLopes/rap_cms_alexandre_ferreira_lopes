<!doctype html>

<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RAP CMS - User <?= $title ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fontawesome-icons -->
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Main -->
    <link rel="stylesheet" href="/public/styles/main.css">

    <!-- CSS Main Partial -->
    <link rel="stylesheet" href="public/styles/main.partials.css">

</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <!-- Slot Main Content -->
    <main class="form-signin w-100 m-auto">
        
        <?php require httpViews($views); ?>
        
    </main>

    <!-- Scripts -->
     
    <!-- Jquery JS -->
     <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Main scripts -->
    <script src="/public/js/main.js"></script>

</body>

</html>