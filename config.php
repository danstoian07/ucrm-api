<?php

return [
    'database' => [
        'name' => 'framework',
        'username' => 'root',
        'password' => 'secret',
        'connection' => 'mysql:host=localhost',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];
