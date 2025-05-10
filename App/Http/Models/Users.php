<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\UserAddressForm;
use App\Http\Models\Forms\UserProfileForm;
use App\Http\Models\Forms\UserSecurityForm;

class Users
{

    public function edit($user)
    {
        $editProfile = UserProfileForm::validate($attributes = [
            'username' => $_POST['username'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
        ]);

        $update = $this->update($user, $attributes['username'], $attributes['email'], $attributes['phone']);

        if (!$update) {

            $editProfile->hasErrors('username', 'Errors found on from')->throw();

            return false;

        }

        Sessions::add('success', 'Profile add with success!');

        return true;
    }

    public function update($id, $username, $email, $phone): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE users SET username = :username, email = :email, phone = :phone, status = :status, profile_completed = :profile_completed , updated_at = :updated_at WHERE id = :id";

        $update = $connection->query(
            $query,
            [
                ':id' => $id,
                ':username' => htmlspecialchars($username),
                ':email' => htmlspecialchars($email),
                ':phone' => htmlspecialchars($phone),
                ':status' => 10,
                ':profile_completed' => 1,
                ':updated_at' => date("Y-m-d H:i:s")
            ]
        );

        if ($update) {

            return true;

        }

        return false;
    }

    public function security($user)
    {
        $security = UserSecurityForm::validate($attributes = [
            'password' => $_POST['password'],
        ]);

        $securityAccount = $this->securityAccount($user, $attributes['password']);

        if (!$securityAccount) {
            
            $security->hasErrors('password', 'Errors found on form!');

            return false;
        }

        Sessions::add('success', 'Password updated with success!');

        return true;
    }

    public function securityAccount($id, $password)
    {
        $connection = App::resolve(Connection::class);

        $query = "UPDATE users SET password = :password WHERE id = :id";

        $update = $connection->query(
            $query,
            [
                ':id' => $id,
                ':password' => password_hash($password, PASSWORD_BCRYPT),
            ]
        );

        if ($update) {

            return true;

        }

        return false;
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

        // $query = "DELETE FROM users WHERE id = :id";
        $query = "UPDATE users SET status = 0 WHERE id = :id";

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

    // Address
    public function getUserAddressById($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users_address WHERE id = :id";

        $address = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $address;
    }

    public function getUserAddressByUser($user)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users_address WHERE user_id = :user_id";

        $address = $connection->query($query, [
            ':user_id' => $user
        ])->fetchAll();

        return $address;
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

            $address->hasErrors('zip_code', 'Errors found on from')->throw();

            return false;

        }

        Sessions::add('success', 'Address add with success!');

        return true;
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
        ]);

        if ($store) {

            return true;

        }

        return false;
    }

    public function addressEdit()
    {
        // dd($_POST);
        $editAddress = UserAddressForm::validate($attributes = [
            'zip_code' => htmlspecialchars($_POST['zip_code']),
            'address' => htmlspecialchars($_POST['address']),
            'address_number' => htmlspecialchars($_POST['address_number']),
            'neighborhood' => htmlspecialchars($_POST['neighborhood']),
            'city' => htmlspecialchars($_POST['city']),
            'state' => htmlspecialchars($_POST['state']),
            'country' => htmlspecialchars($_POST['country']),
        ]);

        // dd($attributes);
        $update = $this->addressUpdate(
            $_POST['id'],
            $attributes['zip_code'],
            $attributes['address'],
            $attributes['address_number'],
            htmlspecialchars($_POST['address_complement'] ?? 'Empty'),
            $attributes['neighborhood'],
            $attributes['city'],
            $attributes['state'],
            $attributes['country']
        );

        if (!$update) {

            $editAddress->hasErrors('userAddress', 'Errors found on from')->throw();

            return false;

        }

        Sessions::add('success', 'Address edited with success!');

        return true;

    }

    public function addressUpdate($id, $zip_code, $address, $address_number, $address_complement, $neighborhood, $city, $state, $country)
    {

        $connection = App::resolve(Connection::class);

        $query = "UPDATE users_address SET zip_code = :zip_code, address = :address, address_number = :address_number, 
        address_complement = :address_complement, neighborhood = :neighborhood, city = :city, state = :state, 
        country = :country, updated_at = :updated_at WHERE id = :id";

        $update = $connection->query($query, [
            ':id' => $id,
            ':zip_code' => $zip_code,
            ':address' => $address,
            ':address_number' => $address_number,
            ':address_complement' => $address_complement,
            ':neighborhood' => $neighborhood,
            ':city' => $city,
            ':state' => $state,
            ':country' => $country,
            ':updated_at' => date("Y-m-d H:i:s")
        ]);

        if ($update) {

            return true;

        }

        return false;

    }

    public function addressDestroy($id): bool
    {
        $connection = App::resolve(Connection::class);

        $query = "DELETE FROM users_address WHERE id = :id";

        $delete = $connection->query($query, [
            ':id' => $id,
        ]);

        if ($delete) {

            return true;
        }

        return false;

    }

}
