<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;

class OrdersItems
{

    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders_items";

        $orders = $connection->query($query)->fetchAll();

        return $orders;
    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders WHERE id = :id";

        $order = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $order;
    }
    // Sections Admin and Users
    public function ordersByUsersId($order, $user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders_items WHERE order_id = :order_id AND user_id = :user_id";

        $orders = $connection->query($query, [
            ':order_id' => $order,
            ':user_id' => $user
        ])->fetchAll();

        return $orders;
    }

    public function ordersItemsByProductId($order, $product)
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders_items JOIN products ON :product_id = products.id  JOIN products_images ON :product_id = products_images.product_id  WHERE order_id = :order_id AND product_id = :product_id";

        $products = $connection->query($query, [
            ':order_id' => $order,
            ':product_id' => $product
        ])->fetchAll();

        return $products;

    }

    public function getLastUserOrders($user, $created)
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders WHERE user_id = :user_id AND created_at >= :created_at";

        $order = $connection->query($query, [
            ':user_id' => $user,
            ':created_at' => $created
        ])->fetch();

        return $order;

    }


    public function destroy($id): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM orders WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            return true;
        }

        return false;
    }

}