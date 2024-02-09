<?php


function getVehicules(PDO $pdo) : array
{
    $query = $pdo->prepare("SELECT * FROM vehicules ORDER BY id DESC");
    $query->execute();
    $vehicules = $query->fetchAll(PDO::FETCH_ASSOC);
    return $vehicules;
}
