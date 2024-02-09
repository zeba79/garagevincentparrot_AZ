<?php
try{
$pdo = new PDO("mysql:dbname=garagevincentparrot;host=localhost; charser=utf8mb4", "root","");
}
catch(Exception $e){
    die('Erreur'.$e->getMessage());
}

