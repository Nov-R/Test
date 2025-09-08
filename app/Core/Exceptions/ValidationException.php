<?php
namespace App\Core\Exceptions;
use Exception;
use Throwable;
class ValidationException extends Exception {
    private array $errors;

    public function __construct(array $errors, string $message="验证异常", int $code=200, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }
    public function getErrors(): array{
        return $this->errors;
    }

}