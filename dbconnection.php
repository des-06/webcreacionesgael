<?php
//     require __DIR__ . '/vendor/autoload.php';
//     $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
//     $dotenv->load();
    
    $mysqli = mysqli_init();
    $mysqli -> real_connect($_ENV['DB_HOST'],$_ENV['DB_USER'],$_ENV['DB_PASSWORD'],$_ENV['DB_DATABASE'], $_ENV['DB_PORT']);
    
    
    
?>
