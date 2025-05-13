<?php

namespace App\Http\Models;

use App\App;
use App\Common\Database\Connection;
use App\Common\Sessions;
use App\Http\Models\Forms\UserProfileForm;
use App\Http\Models\Forms\UserSecurityForm;

class Users
{
    // Section Users
    public function index()
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users";

        $users = $connection->query($query)->fetchAll();

        return $users;
    }

    public function show($id)
    {
        $connection = App::resolve(Connection::class);

        $query = "SELECT * FROM users WHERE id = :id";

        $show = $connection->query($query, [
            ':id' => $id
        ])->fetch();

        return $show;
    }

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

}
