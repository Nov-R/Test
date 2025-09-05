<?php

spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $len = strlen($prefix);
    if(strncmp($prefix, $class, $len) !== 0 ) {
        return;
    }

    $baseDir = __DIR__ . '/app/';
    $relativeClass = substr($class, $len);
    $relativeClass = str_replace('\\', '/', $relativeClass);
    
    $file = $baseDir . $relativeClass . '.php';

    if(file_exists($file)) {
        require $file;
    }


});

