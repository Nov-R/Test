<?php

namespace App\Module\Controller;

use App\Module\Service\Service;
use App\Core\Exceptions\ValidationException;
class Controller {
    private Service $service;

    /**
     * 构造函数
     * @param Service $service 服务层
     */
    public function __construct(Service $service){
        $this->service = $service;
    }
    public function test($id): void{
        try{
            $this->service->test($id);
        } catch(ValidationException $e){
            echo "controller验证错误！\n";
            echo $e->getMessage();
            echo $e->getCode();
            echo json_encode($e->getErrors());
        }
    }
}