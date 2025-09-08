<?php

namespace App\Module\Validator;
use App\Core\Exceptions\ValidationException;
class Validator {
    public static function validate($id): void{
        $error = [];
        if(!is_int($id)){
            $error["id"] = "id必须为数字哦!!!";
        }

        if(!empty($error)){
            throw new ValidationException($error);
        }
    }
}