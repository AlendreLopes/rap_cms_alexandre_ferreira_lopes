<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;

class ProductsImages
{
    
    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products";

        $products = $connection->query($query)->fetchAll();

        return $products;
    }

    public function show($id) 
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products WHERE id = :id";

        $details = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $details;
    }
    public function store()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products_images";

        $images = $connection->query($query);

        return $images;
    }

    public function update()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM products_images";

        $images = $connection->query($query);

        return $images;
    }

    public function destroy($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM products_images WHERE id = :id";

        $images = $connection->query($query, [
            ':id' => $id
        ]);

        return $images;
    }

}