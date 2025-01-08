<?php
$hostname = 'localhost'
$database = 'test'
$user = 'root@localhost'
try{
    $pdo = new PDO("mysql:host=$hostname;dbname=$database", '$user')
} catch(PDOException $e){
    echo "Erro:" .$e->getMessage();
}
