<?php

namespace App\Module\Validator;

class Validator {
    public function validate($id): void {
        $errors = [];
       
        if(!is_int($id)) {
            $errors['id'] = "id必须为数字";
        }
        
        if(!empty($errors)) {
            throw new \Exception("". implode(", ", $errors));
        }
    }
}