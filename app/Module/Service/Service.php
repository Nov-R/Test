<?php

namespace App\Module\Service;
use App\Module\Validator\Validator;
class Service{
    private $validator;
    public function __construct(Validator $validator){
        $this->validator = $validator;
    }
    public function test($id): void{
        try {
            $this->validator->validate($id);
            echo "编号为{$id}";
        } catch (\Exception $e) {
            echo "验证错误！";
            throw $e;
        }
    }
}