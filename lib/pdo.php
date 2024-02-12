<?php

try{
$pdo = new PDO("mysql:dbname="._DB_NAME_.";host="._DB_SERVER_."; charser=utf8mb4", _DB_USER_ , _DB_PASSWORD_);
}
catch(Exception $e){
    die('Erreur de connexion à la base de données'.$e->getMessage());
}

