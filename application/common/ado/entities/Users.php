<?php

namespace Application\Common\Ado\Entities;

use Application\Common\Ado\Mirrors\MirrorUsers;
use Doctrine\DBAL\Driver\PDO\Exception;
use Doctrine\DBAL\DriverManager;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

// use Monolog\Level;
// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;

class Users
{
    public static $instance;
    protected $components = [
        'db' => [
            'dsn' => 'mysql:host=mysql_5;dbname=rap_cms',
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
        ],
        'admins' => [
            'dsn' => 'mysql:host=mysql_5;dbname=rap_cms_admins',
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
        ],
        'users' => [
            'dsn' => 'mysql:host=mysql_5;dbname=rap_cms_users',
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
        ],
    ];

    private function __construct(){
    }

    public static function geInstance()
    {
        if (!self::$instance)
            self::$instance = new Users();

        return self::$instance;
    }
    public function Search()
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function Store(MirrorUsers $user)
    {
        try {

            $connection = DriverManager::getConnection(self::$components['db']);

            $sql = "INSERT INTO users (
                username,
                email,
                password,
                status
            ) VALUES (
                :username,
                :email,
                :password,
                :status
            )";
            $prepare = $connection->prepare($sql);
            $prepare->bindValue(":username", $user->getUsername());
            $prepare->bindValue(":email", $user->getEmail());
            $prepare->bindValue(":password", $user->getPassword());
            $prepare->bindValue(":status", $user->getStatus());
            $prepare->executeQuery();
            $user->getId();

        } catch (Exception $e) {

            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";

            $logger = new Logger('Connection');
            $logger->pushHandler(new StreamHandler('/application/controller/log', Level::Warning));
            $logger->info("Error: Conection code: " . $e->getCode() . " Mensage: " . $e->getMessage());
        }
    }

    public function Update()
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function Destroy($id)
    {
        try {
            //code...
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

}