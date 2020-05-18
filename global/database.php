<?php

// Using Medoo namespace
use Medoo\Medoo;

// Initialize
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'trivandrum-phonebook',
    'server' => 'mariadb',
    'username' => 'docker',
    'password' => 'docker'
]);