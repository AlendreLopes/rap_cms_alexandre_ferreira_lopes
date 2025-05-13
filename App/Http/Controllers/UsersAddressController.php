<?php

namespace App\Http\Controllers;

use App\Common\Sessions;
use App\Http\Models\UsersAddress;

class UsersAddressController
{
    protected array $attributes;
    protected $model;

    public function __construct()
    {
        $this->model = new UsersAddress();
    }

    // Address
    public function index($views, $user)
    {
        // Title
        $title = 'Address';
        // 
        $userAddress = $this->model->getUserAddressByUser($user);
        // 
        return require httpLayouts('Users/UserLayout.php');

    }

    public function create($views)
    {
        // Title
        $title = 'Create Address';
        // 
        return require httpLayouts('Users/UserLayout.php');
    }

    public function store()
    {
        $this->model->addressCreate();
    }

    public function edit($views, $id)
    {
        // Title
        $title = 'Edit Address';
        // 
        $editAddress = $this->model->getUserAddressById($id);
        // 
        return require httpLayouts('Users/UserLayout.php');

    }

    public function update()
    {
        return $this->model->addressEdit();
    }

    public function delete($id)
    {
        $delete = $this->model->addressDestroy($id);

        if ($delete) {

            Sessions::add('success', 'Address deleted with succeess!');

            redirect('/dashboard/address');
        }

        Sessions::add('error', 'Address do not deleted!');

        redirect('/dashboard/address');

    }

}
