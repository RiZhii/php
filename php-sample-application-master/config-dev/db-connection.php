<?php

return new PDO("mysql:host=localhost;dbname=sample", "admin", "adminpass", [PDO::ATTR_PERSISTENT => true]);
