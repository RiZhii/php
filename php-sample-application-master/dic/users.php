<?php
require_once __DIR__ . '/../autoloader.php';

return new Service\UsersService(
    require "config/db-connection.php"
);
