<?php

return  [
    'driver' => 'mysql', // Db driver
    'host' => 'localhost',
    'db_name' => 'app3',
    'db_user' => 'root',
    'db_password' => '',
    'charset' => 'utf8', // Optional
    'prefix' => '', // Table prefix, optional
    'options' => [ // PDO constructor options, optional
        PDO::ATTR_TIMEOUT => 5,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ],
];