<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Controllers\CartController;
use App\Http\Models\Forms\OrdersForm;

class Orders
{

    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders";

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
    public function ordersByUsersId($user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders JOIN users ON users.id = orders.id WHERE user_id = :user_id";

        $orders = $connection->query($query, [
            ':user_id' => $user
        ])->fetchAll();

        return $orders;
    }

    public function ordersByIdAndByUsersId($id, $user)
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM orders WHERE id = :id AND user_id = :user_id";

        $orders = $connection->query($query, [
            ':id' => $id,
            ':user_id' => $user
        ])->fetch();

        return $orders;

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

    public function create($product) : bool
    {

        $orders = OrdersForm::validate($attributes = [
            'user_id' => $_POST['user_id'],
            'user_address_id' => $_POST['user_address_id'],
            'cart_products_total' => $_POST['cart_products_total'],
            'cart_products_amount' => $_POST['cart_products_amount']
        ]);

        $store = $this->store(
            $attributes['user_id'],
            $attributes['user_address_id'],
            $product,
            $attributes['cart_products_total'],
            $attributes['cart_products_amount']
        );

        if (!$store) {

            $orders->hasErrors('orders', 'Errors are found on form')->throw();
            return false;

        }

        return true;

    }

    public function store($user, $userAddress, $cartProducts, $cartProductsQuantity, $cartProductsTotal): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO orders (user_id, user_address_id, quantity, total, created_at) VALUES (:user_id, :user_address_id, :quantity, :total, :created_at)";

        $ordersItems = "INSERT INTO orders_items (user_id, order_id, product_id, created_at) VALUES (:user_id, :order_id, :product_id, :created_at)";

        $store = $connection->query($query, [
            ':user_id' => $user,
            ':user_address_id' => $userAddress,
            ':quantity' => $cartProductsQuantity,
            ':total' => $cartProductsTotal,
            ':created_at' => date('Y-m-d h:m:s')
        ]);

        $getOrders = $this->getLastUserOrders($user, date('Y-m-d'));

        foreach ($cartProducts as $product) {
            $orders = $connection->query($ordersItems, [
                ':user_id' => $user,
                ':order_id' => $getOrders['id'],
                ':product_id' => $product->getId(),
                ':created_at' => date('Y-m-d h:m:s')
            ]);
        }

        if ($orders) {
            $clearCart = (new CartController())->delete();
            return true;
        }

        return false;
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