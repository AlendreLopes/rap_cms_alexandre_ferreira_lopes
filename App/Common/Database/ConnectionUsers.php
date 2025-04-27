<?php

// namespace Application\Common\Ado;

// use Monolog\Handler\StreamHandler;
// use Monolog\Level;
// use Monolog\Logger;
// use PDO;
// use PDOException;
// use PDOStatement;

class ConnectionUsers
{
    protected $instance;

    private static $system_title = "rap_cms";
    private static $system_email = "alendrelopes@gmail.com";

    public function __construct(array $databases, array $secrets)
    {
        try {
            $this->instance = new PDO($databases['dns'], $secrets['username'], $secrets['password'], [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            $this->instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->instance->exec('SET NAMES UTF-8');
        } catch (PDOException $expeption) {
            mail(self::$system_email, "Error connection", $expeption->getMessage());
            // $logger = new Logger('Connection');
            // $logger->pushHandler(new StreamHandler('/application/library/log', Level::Warning));
            // $logger->info("Error: Conection code: " . $expeption->getCode() . " Mensage: " . $expeption->getMessage());
        }
    }

    public function query($query, $params = [])
    {

        $statement = $this->instance->prepare($query);

        $statement->execute($params);

        return $statement;
    }

    // public static function getInstance()
    // {
    //     if (!self::$instance) {
    //         new Connection();
    //     }
    //     return self::$instance;
    // }

}