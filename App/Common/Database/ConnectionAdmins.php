<?php

namespace App\Common\Database;

use App\Common\Response;
use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use PDO;
use PDOException;
use PDOStatement;

class ConnectionAdmins
{
    protected $instance;

    protected $statement;

    private static $system_title = "rap_cms";
    private static $system_email = "alendrelopes@gmail.com";

    public function __construct(array $databases, array $secrets)
    {
        try {

            $this->instance = new PDO($databases['dns'], $secrets['username'], $secrets['password'], [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            $this->instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $expeption) {

            mail(self::$system_email, "Error connection", $expeption->getMessage());

            echo "Error: Conection code: " . $expeption->getCode() . "<br> Mensage: <br>" . $expeption->getMessage();

            $logger = new Logger('Connection');
            $logger->pushHandler(new StreamHandler('/App/Common/Log', Level::Warning));
            $logger->info("Error: Conection code: " . $expeption->getCode() . " Mensage: " . $expeption->getMessage());
        }
    }

    public function query($query, $params = [])
    {

        $this->statement = $this->instance->prepare($query);

        $this->statement->execute($params);

        return $this;
    }

    public function fetch()
    {
        return $this->statement->fetch();
    }

    public function fetchAll()
    {
        return $this->statement->fetchAll();
    }

    public function fetchOrAbort()
    {
        $result = $this->fetch();

        if (!$result) {
            abort(Response::NOT_FOUND);
        }

        return $result;
    }

}