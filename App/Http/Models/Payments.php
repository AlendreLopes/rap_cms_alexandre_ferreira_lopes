<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;

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

}