<?php

namespace Application\Common\Ado;

use Monolog\Handler\StreamHandler;
use Monolog\Level;

use Monolog\Logger;
use PDO;
use PDOException;

class Connection extends PDO
{
    private static $system_title = "rap_cms";
    private static $system_email = "alendrelopes@gmail.com";

    private $table;

    protected static $instance;

    /**
     * Summary of SND_DB - DB_DNS
     * 
     * Summary of EMANRESU - USERNAME
     * 
     * Summary of DROSSAP - PASSWORD
     */
    private $components = [
        'db' => [
            'dsn' => 'mysql:host=mysql_5;dbname=rap_cms',
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
            'driver' => 'pdo_mysql',
        ],
        'admins' => [
            'dsn' => 'mysql:host=mysql_5;dbname=rap_cms_admins',
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
            'driver' => 'pdo_mysql',
        ],
        'users' => [
            'dsn' => 'mysql:host=mysql_5;dbname=rap_cms_users',
            'username' => 'root',
            'password' => 'password',
            'charset' => 'utf8',
            'driver' => 'pdo_mysql',
        ],
    ];
    // private function __construct(){
    // }
    private function __construct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }


    // public static function getInstance()
    // {
    //     $connection = DriverManager::getConnection(self::$components['db']);
    //     return $connection;
    // }

    // public static function getInstance(): PDO
    // {
    //     if (!isset(self::$instance)) {
    //         self::$instance = new PDO(self::$components['db']['dsn'],
    //             self::$components['db']['username'],
    //             self::$components['db']['password'],
    //             array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    //         );
    //         self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         self::$instance->setAttribute( PDO::ATTR_ORACLE_NULLS,PDO::NULL_EMPTY_STRING);
    //     }
    //     return self::$instance;
    // }
    private function setConnection()
    {
        try {
            self::$instance = new PDO(self::$components['db']['dsn'], self::$components['db']['username'], self::$components['db']['password']);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->exec('SET NAMES UTF-8');
        } catch (PDOException $expeption) {

            mail(self::$system_email, "Error connection", $expeption->getMessage());
            $logger = new Logger('Connection');
            $logger->pushHandler(new StreamHandler('/application/controller/log', Level::Warning));
            $logger->info("Error: Conection code: " . $expeption->getCode() . " Mensage: " . $expeption->getMessage());

        }
    }
}