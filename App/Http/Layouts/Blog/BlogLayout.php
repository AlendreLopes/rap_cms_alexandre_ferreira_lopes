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

    <!-- Bluimp Css -->
    <link rel="stylesheet" href="/node_modules/blueimp-file-upload/css/jquery.fileupload.css">

    <!-- CSS Main -->
    <link rel="stylesheet" href="/public/styles/main.css">

    <!-- CSS Main Partial -->
    <link rel="stylesheet" href="/public/styles/main.partials.css">

</head>

<body>

    <!-- Header -->
    <header>
        <?php require httpViews('Site/Partials/header.php'); ?>
    </header>

    <!-- Slot Main Content -->
    <main class="container mt-3 py-5">
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

    <?php if(isset($title) && ($title == ('Create Post')) || ($title == ('Edit Post'))): ?>
    <!-- Validate Form -->
    <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
    <script src="/public/js/validations/blog/jquery-validation-blog-create.js"></script>
    <script>
        // $('#blogForm').submit(function (e) {
        //     e.preventDefault();
        //     let formData = $(this);
        //     // alert(formData);
        //     let formCreate = blogCreate();
        // });

        // function blogCreate(dataForm) {
        //     $.ajax({
        //         type: "POST",
        //         data: dataForm,
        //         url: "/blog/store",
        //         async:false
        //     }).then(success, error);
        // }

        // function success(data) { 
        //     console.log(data);
        //  }

        // function error(data) {
        //     console.log(data);
        // }
    </script>
    <?php endif; ?>

    <?php if(isset($title) && $title == 'Show Post'): ?>
    <!-- Validate Form -->
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

</body>

</html>