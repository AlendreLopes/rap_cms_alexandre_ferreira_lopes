<!doctype html>

<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>RAP CMS</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
        <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
        <!-- Summer note CSS -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="/public/assets/dist/css/carousel.css">

</head>

<body>
    
    <!-- header -->
    <?php include("application/view/layouts/heager.php"); ?>

    <!-- carousel -->
    <?php include("application/view/layouts/carousel.php"); ?>

    <div class="container-fluid">
        <!-- content -->
        <?php include("application/view/layouts/main.php"); ?>
    </div>

    <!-- footer -->
    <?php include("application/view/layouts/footer.php"); ?>

    <!-- Jquery JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- DataTables JS -->
    <script src="//cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- Sweet alert js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @session('success')
    <script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2500
        });
    </script>
    @endsession

    @session('error')
    <script>
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2500
        });
    </script>
    @endsession

    <script>
        $(document).ready(function () {
            //datatables
            $('.table').DataTable();
            //summernote
            $('.summernote').summernote();
            //display the summernote drop down menu
            $('.dropdown-toggle').dropdown();
        })
    </script>

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

    <script>
        function handleImageInputChange(input, image) {
            document.getElementById(input).addEventListener('change', function () {
                readUrl(this, image)
            });
        }

        function readUrl(input, image) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById(image).classList.remove('d-none');
                    document.getElementById(image).setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        handleImageInputChange('thumbnail', 'thumbnail_preview');
        handleImageInputChange('first_image', 'first_image_preview');
        handleImageInputChange('second_image', 'second_image_preview');
        handleImageInputChange('third_image', 'third_image_preview');
    </script>

    <!-- <script src="/public/assets/dist/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>