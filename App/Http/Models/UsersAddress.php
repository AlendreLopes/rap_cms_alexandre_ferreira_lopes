<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\UserAddressForm;

class UsersAddress
{
   
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
    
    public function create()
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

    public function store($user, $zip_code, $address, $address_number, $address_complement, $neighborhood, $city, $state, $country)
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

    public function edit()
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

    public function update($id, $zip_code, $address, $address_number, $address_complement, $neighborhood, $city, $state, $country)
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

    public function destroy($id): bool
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
