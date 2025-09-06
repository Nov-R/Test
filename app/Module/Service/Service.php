<?php

namespace App\Module\Service;
use App\Module\Validator\Validator;
use App\Core\Exceptions\ValidationException;
class Service{
    // private $validator;
    // public function __construct(Validator $validator){
    //     $this->validator = $validator;
    // }
    public function test($id): void{
        try {
            Validator::validate($id);
            echo "编号为{$id}";
        } catch (ValidationException $e) {
            echo "service验证错误！\n";
            throw $e;
        }
    }
}