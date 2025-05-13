<?php


namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\ProducsForm;

class Products
{

    public function index()
    {

        $connection = App::resolve(Connection::class);
        // $query = "SELECT * FROM products";
        $query = "SELECT * FROM products_view";

        $products = $connection->query($query)->fetchAll();

        return $products;

    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "Call products_show($id)";

        $show = $connection->query($query)->fetch();

        return $show;
    }

    public function create($adm)
    {
        $product = ProducsForm::validate($attributes = [
            'category_id' => $_POST['category_id'],
            'brand_id' => $_POST['brand_id'],
            'collor_id' => $_POST['collor_id'],
            'size_id' => $_POST['size_id'],
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
            'status' => $_POST['status'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['price'],
            'discount' => $_POST['discount'],
            'description' => $_POST['description'],
        ]);

        $store = $this->store(
            $adm,
            $attributes['category_id'],
            $attributes['brand_id'],
            $attributes['collor_id'],
            $attributes['size_id'],
            $attributes['name'],
            $attributes['slug'],
            $attributes['status'],
            $attributes['quantity'],
            $attributes['price'],
            $attributes['discount'],
            $attributes['description']
        );

        if (!$store) {

            $product->hasErrors('products', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Product registered with succcess!');
        return true;
    }

    public function store($adm, $category, $brand, $collor, $size, $name, $slug, $status, $quantity, $price, $discount, $description): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO products (adm_id, brand_id, category_id, collor_id, size_id, name, slug, quantity, price, description, status, discount, created_at) 
        VALUES (:adm_id, :brand_id, :category_id, :collor_id, :size_id, :name, :slug, :quantity, :price, :description, :status, :discount, :created_at)";

        $store = $connection->query($query, [
            ':adm_id' => $adm,
            ':brand_id' => $brand,
            ':category_id' => $category,
            ':collor_id' => $collor,
            ':size_id' => $size,
            ':name' => $name,
            ':slug' => $slug,
            ':quantity' => $quantity,
            ':price' => $price,
            ':description' => $description,
            ':status' => $status,
            ':discount' => $discount,
            ':created_at' => date('Y-m-d h:m:s')
        ]);

        if ($store) {
            return true;
        }

        return false;
    }

    public function edit($id, $adm)
    {
        $product = ProducsForm::validate($attributes = [
            'brand_id' => $_POST['brand_id'],
            'category_id' => $_POST['category_id'],
            'collor_id' => $_POST['collor_id'],
            'size_id' => $_POST['size_id'],
            'name' => $_POST['name'],
            'slug' => $_POST['slug'],
            'quantity' => $_POST['quantity'],
            'price' => $_POST['price'],
            'description' => $_POST['description'],
            'status' => $_POST['status'],
            'discount' => $_POST['discount'],
        ]);

        $update = $this->update(
            $id,
            $adm,
            $attributes['brand_id'],
            $attributes['category_id'],
            $attributes['collor_id'],
            $attributes['size_id'],
            $attributes['name'],
            $attributes['slug'],
            $attributes['quantity'],
            $attributes['price'],
            $attributes['description'],
            $attributes['status'],
            $attributes['discount'],
        );

        if (!$update) {

            $product->hasErrors('products', 'Errors are found on form')->throw();
            return false;

        }

        Sessions::add('success', 'Product updated with succcess!');
        return true;
    }

    public function update($id, $adm, $brand, $category, $collor, $size, $name, $slug, $quantity, $price, $description, $status, $discount): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE products SET adm_id =:adm_id, brand_id = :brand_id, category_id = :category_id, collor_id = :collor_id, size_id = :size_id, name = :name, slug = :slug, 
        quantity = :quantity, price = :price, description = :description, status = :status, discount = :discount, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query($query, [
            ':id' => $id,
            ':adm_id' => $adm,
            ':brand_id' => $brand,
            ':category_id' => $category,
            ':collor_id' => $collor,
            ':size_id' => $size,
            ':name' => $name,
            ':slug' => $slug,
            ':quantity' => $quantity,
            ':price' => $price,
            ':description' => $description,
            ':status' => $status,
            ':discount' => $discount,
            ':updated_at' => date('Y-m-d h:m:s')
        ]);

        if ($update) {
            return true;
        }

        return false;
    }
    public function destroy($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM products WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            return true;
        }

        return false;
    }
}