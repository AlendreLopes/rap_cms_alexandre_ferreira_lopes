<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\UserAddressForm;

class Users
{

    public function update($id, $username, $email, $password): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE users SET username = username, email = :email, password = :password, status = :status, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query(
            $query,
            [
                ':id' => $id,
                ':username' => htmlspecialchars($username),
                ':email' => htmlspecialchars($email),
                ':password' => htmlspecialchars($password),
                ':status' => 10,
                ':updated_at' => date("Y-m-d H:i:s")
            ]
        );

        if ($update) {

            Sessions::add('success', 'User edited witch success!');

            return true;

        }

        Sessions::add('success', 'Error to try edit User!');

        return false;
    }

    public function addressCreate()
    {
        // dd($_POST);
        $address = UserAddressForm::validate($attributes = [
            'zip_code' => htmlspecialchars($_POST['zip_code']),
            'address' => htmlspecialchars($_POST['address']),
            'address_number' => htmlspecialchars($_POST['address_number']),
            'neighborhood' => htmlspecialchars($_POST['neighborhood']),
            'city' => htmlspecialchars($_POST['city']),
            'state' => htmlspecialchars($_POST['state']),
            'country' => htmlspecialchars($_POST['country']),
        ]);

        // dd($attributes);
        $store = $this->addressStore(
            $_SESSION['rap_cms']['userId'],
            $attributes['zip_code'],
            $attributes['address'],
            $attributes['address_number'],
            htmlspecialchars($_POST['address_complement'] ?? 'Empty'),
            $attributes['neighborhood'],
            $attributes['city'],
            $attributes['state'],
            $attributes['country']
        );

        if (!$store) {

            Sessions::add('success', 'Address add with success!');

            return true;

        }

        Sessions::add('error', 'Error on try add address!');

        $address->hasErrors('userAddress', 'Errors found on from')->throw();

        return false;
    }

    public function addressStore($user, $zip_code, $address, $address_number, $address_complement, $neighborhood, $city, $state, $country)
    {
        $connection = App::resolve(Connection::class);

        $query = "INSERT INTO users_address (user_id, zip_code, address, address_number, address_complement, neighborhood, city, state, country, created_at) 
        VALUES (:user_id, :zip_code, :address, :address_number, :address_complement, :neighborhood, :city, :state, :country, :created_at)";

        $store = $connection->query($query, [
            ':user_id' => $user,
            ':zip_code' => $zip_code,
            ':address' => $address,
            ':address_number' => $address_number,
            ':address_complement' => $address_complement,
            ':neighborhood' => $neighborhood,
            ':city' => $city,
            ':state' => $state,
            ':country' => $country,
            ':created_at' => date("Y-m-d H:i:s"),
        ])->fetch();

        return $store;
    }

    public function getUserById($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE id = :id";

        $user = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $user;
    }

    public function getUserByAddress($user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users_address WHERE user_id = :user_id";

        $address = $connection->query($query, [
            ':user_id' => $user
        ])->fetchAll();

        return $address;
    }

    public function getUserByEmail($email)
    {

        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE email = :email";

        $user = $connection->query($query, [
            ':email' => $email
        ])->fetch();

        return $user;
    }

    public function destroy($id): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM users WHERE id = :id";

        $destroy = $connection->query($query, [':id' => $id]);

        if ($destroy) {

            return true;
        }

        return false;
    }

    public function factory($number)
    {
        $faker = \Faker\Factory::create();

        $connection = App::resolve(Connection::class);

        for ($i = 0; $i < $number; $i++) {
            $connection->query("INSERT INTO users(username, email, password, status, created_at) VALUES (:username, :email, :password, :status, :created_at)", [
                ':username' => $faker->name(),
                ':email' => $faker->unique()->email(),
                ':password' => password_hash("password!", PASSWORD_BCRYPT),
                ':status' => 10,
                ':created_at' => date("Y-m-d H:i:s"),
            ]);
        }

    }

}
