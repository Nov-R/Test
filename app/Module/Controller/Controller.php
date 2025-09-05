<?php

namespace App\Module\Controller;

use App\Module\Service\Service;

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
        } catch(\Exception $e){
            echo $e->getMessage();
        }
    }
}