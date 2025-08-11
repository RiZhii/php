<?php
try {
    $pdo = new PDO(
        "mysql:host=127.0.0.1;port=3306;dbname=sampledb",
        "admin",
        "adminpass",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "Database connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
