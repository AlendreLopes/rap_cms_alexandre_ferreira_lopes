<?php

namespace Application\Common\Ado\Mirrors;

class MirrorUsers
{

    private $id;
    private $username;
    private $email;
    private $password;
    private $status;
    private $profile_completed;

    public function getId($id){
        return $this->$id;
    }

    public function setId($id){
        $this->$id = $id;
    }

    public function getUsername($username){
        return $this->$username;
    }

    public function setUsername($username){
        $this->$username = $username;
    }

    public function getEmail($email){
        return $this->$email;
    }

    public function setEmail($email){
        $this->$email = $email;
    }

    public function getPassword($password){
        return $this->$password;
    }

    public function setPassword($password){
        $this->$password = $password;
    }

    public function getStatus($status){
        return $this->$status;
    }

    public function setStatus($status){
        $this->$status = $status;
    }

    public function getProfileCompleted($profile_completed){
        return $this->$profile_completed;
    }

    public function setProfileCompleted($profile_completed){
        $this->$profile_completed = $profile_completed;
    }
}