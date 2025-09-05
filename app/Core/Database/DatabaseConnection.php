<?php
namespace App\Core\Database;
use PDO;
class DatabaseConnection {
    private static ?PDO $instance = null;
    private function __construct(){}

    public static function getInstance(){
        $config = require __DIR__ . "/../../../config/database.php";
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
        self::$instance = new PDO(
            $dsn, 
            $config["username"], 
            $config["password"],
            $config["options"]
        );
        return self::$instance;
    }



}