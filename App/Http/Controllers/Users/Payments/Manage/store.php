<?php

use App\Http\Controllers\PaymentsController;
// 
$user = $_SESSION['rap_cms']['userId'];
// 
$transactionId = strip_tags($_GET['transaction_id']);
// 
$orderId = strip_tags($_GET['order_id']);
// 
$payments = (new PaymentsController())->store($user, $orderId, $transactionId);
// 
redirect("/dashboard/orders?id={$user}");