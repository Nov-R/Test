<?php
require_once './autoloader.php';
use App\Core\Database\DatabaseConnection;

class Index
{
    private PDO $db;
    public function __construct() {
        $this->db = DatabaseConnection::getInstance();
    }

    public function test(): void {
        $stmt = $this->db->prepare("SELECT * FROM sys_nav where id = ?");
        $stmt->execute([2]);
        $result = 
        $container = new \App\Core\Container();
        
        $controller = $container->make(\App\Module\Controller\Controller::class);
        call_user_func_array([$controller,'test'], ['12343']);
    }
}




$index = new Index();
$index->test();


