<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\PaymentsForm;

class Payments
{

    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM payments";

        $payments = $connection->query($query)->fetchAll();

        return $payments;
    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM payments WHERE id = :id";

        $payments = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $payments;
    }

    public function usersPayments($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM payments JOIN users ON users.id = payments.user_id  WHERE user_id = :user_id";

        $payments = $connection->query($query, [
            ':user_id' => $id
        ])->fetchAll();

        return $payments;
    }

    public function create($user, $orderId, $transactionId): bool
    {

        $store = $this->store(
            $user,
            $orderId,
            $transactionId
        );

        if (!$store) {

            return false;

        }

        Sessions::add('success', 'Payment made successfully!');

        return true;

    }
    public function store($user, $orderId, $transactionId): bool
    {
        $connection = App::resolve(Connection::class);

        $payment = "INSERT INTO payments (user_id, order_id, transaction_id, created_at) VALUES (:user_id, :order_id, :transaction_id, :created_at)";

        $order = "UPDATE orders SET status = :status, updated_at = :updated_at WHERE id = :id";

        $store = $connection->query($payment, [
            ':user_id' => $user,
            ':order_id' => $orderId,
            ':transaction_id' => $transactionId,
            ':created_at' => date('Y-m-d h:m:s')
        ]);

        if ($store) {

            $update = $connection->query($order, [
                ':id' => $orderId,
                ':status' => 'paid',
                ':updated_at' => date('Y-m-d h:m:s')
            ]);
            
            if ($update) {
                return true;
            }
        }

        return false;
    }


}