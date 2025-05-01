<!doctype html>

<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RAP CMS - ADM <?= $title ?></title>

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

    <!-- Validate Form -->
    <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
    <script src="/node_modules/jquery-validation/dist/additional-methods.js"></script>

    <?php if ($title == 'Login'): ?>
        <script src="/public/js/validations/site/jquery-validation-login.js"></script>
    <?php elseif (($title == 'Recover')): ?>
        <script src="/public/js/validations/site/jquery-validation-recover-pass.js"></script>
    <?php elseif (($title == 'Register')): ?>
        <script src="/public/js/validations/site/jquery-validation-register.js"></script>
    <?php endif; ?>


    <!-- Main scripts -->
    <script src="/public/js/main.js"></script>

</body>

</html>