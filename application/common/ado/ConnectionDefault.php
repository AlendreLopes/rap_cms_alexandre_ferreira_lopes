<?php

namespace Application\Common\Ado;

use PDO;
use PDOException;

class Connection
{
    protected static $instance;

    private static $system_title = "rap_cms";
    private static $system_email = "alendrelopes@gmail.com";

    /**
     * Summary of SND_DB - DB_DNS
     */
    // private static $snd_bd  = Aplication::params['components']['db']['dns'];
    private static $snd_bd = 'mysql:host=mysql_5;dbname=rap_cms';
    /**
     * Summary of EMANRESU - USERNAME
     */
    // private static $emanesu = Aplication::params['components']['db']['username'];
    private static $emanesu = 'root';
    /**
     * Summary of DROSSAP - PASSWORD
     */
    // private static $drossap = Aplication::params['components']['db']['password'];
    private static $drossap = 'password';

    protected $components = [
        // 'db' => [
        //     'class' => 'yii\db\Connection',
        //     'dsn' => 'mysql:host=mysql_5;dbname=alendre_petimagem',
        //     'username' => 'root',
        //     'password' => 'password',
        //     'charset' => 'utf8',
        // ],
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
    // public function __construct($table = null)
    private function __construct()
    {
        // $this->table = $table;
        // $this->setConnection();
        try {
            self::$instance = new PDO(self::$snd_bd, self::$emanesu, self::$drossap);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->exec('SET NAMES UTF-8');
        } catch (PDOException $expeption) {

            mail(self::$system_email, "Error connection", $expeption->getMessage());
            echo "Error on try to connect the database";
        }
    }

    private function setConnection()
    {
        try {
            self::$instance = new PDO(self::$snd_bd, self::$emanesu, self::$drossap);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->exec('SET NAMES UTF-8');
        } catch (PDOException $expeption) {

            mail(self::$system_email, "Error connection", $expeption->getMessage());
            echo "Error on try to connect the database";
        }
    }

    public static function getInstance(): PDO
    {
        if (!self::$instance) {
            new Connection();
        }
        return self::$instance;
    }

}