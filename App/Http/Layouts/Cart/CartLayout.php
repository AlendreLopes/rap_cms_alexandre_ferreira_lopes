<!doctype html>

<html lang="en" data-bs-theme="auto">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RAP CMS - <?= $title ?? 'Cart' ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- Fontawesome-icons -->
    <link rel="stylesheet" href="/node_modules/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- CSS Main -->
    <link rel="stylesheet" href="/public/styles/main.css">

    <!-- CSS Main Partial -->
    <link rel="stylesheet" href="public/styles/main.partials.css">

</head>

<body>

    <!-- Header -->
    <!-- Slot Main Content -->
    <main class="container">
        <?php require httpViews($views); ?>
    </main>

    <!-- Footer -->

    <!-- Scripts -->

    <!-- Jquery JS -->
    <script type="text/javascript" src="/node_modules/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fontawesome icons -->
    <script type="text/javascript" src="/node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>

    <!-- Main scripts -->
    <script src="/public/js/main.js"></script>

    <!-- Main scripts -->
    <script src="/public/js/main.toggle.theme.js"></script>

    <?php if (isset($title) && $title == 'Checkout'): ?>
        <script src="/node_modules/jquery-validation/dist/jquery.validate.js"></script>
        <script src="/public/js/validations/dashboard/jquery-validation-checkout.js"></script>
    <?php endif; ?>

    <?php if (isset($title) && $title == 'Payments'): ?>
        
        <script src="https://www.paypal.com/sdk/js?client-id=AfxOiaE8x0T-FjKcdARPPez3ArsvnvaTkjuJkDCUJ3-ZX9lYXq7RHPvXTVYp-TqcLZMZ8Sl8eZU5i5xJ&currency=BRL"></script>

        <script>
            paypal.Buttons({
                // Sets up the transaction when a payment button is clicked
                createOrder: function (data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "<?= $order['total'] ?>"
                            }
                        }]
                    });
                },
                // Finalize the transaction after payer approval
                onApprove: function (data, actions) {
                    return actions.order.capture().then(function (orderData) {
                        // Successful capture! For dev/demo purposes:
                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                        var transaction = orderData.purchase_units[0].payments.captures[0];
                        alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\n See console for all available details');
                        window.location.href = "/dashboard/payments/store?transaction_id=" + transaction.id + "&order_id=" + <?= $order['id'] ?>;
                    });
                }
            }).render('#paypal-button-container');
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

</body>

</html>