<?php

return [
    "host" => "localhost",
    "dbname" => "grid",
    "username" => "ssy",
    "password" => "m,./1111",
    "charset" => "utf8mb4",
    "options" => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
    ]
];