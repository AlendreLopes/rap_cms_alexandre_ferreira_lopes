<?php


namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;

class Products
{
    
    public function products()
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products";

        $products = $connection->query($query)->fetchAll();

        return $products;

    }

    public function details($id) 
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products WHERE id = :id";

        $details = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $details;

    }
}