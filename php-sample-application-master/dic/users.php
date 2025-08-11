<?php
require_once __DIR__ . '/../autoloader.php';

$pdo = require __DIR__ . '/../config/db-connection.php';
$usersService = new Service\UsersService($pdo);


return new Service\UsersService(
    require "config/db-connection.php"
);
