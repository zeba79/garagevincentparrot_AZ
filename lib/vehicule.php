<?php


function getVehicules(PDO $pdo) : array
{
    $query = $pdo->prepare("SELECT * FROM vehicules");
    $query->execute();
    $vehicules = $query->fetchAll(PDO::FETCH_ASSOC);
    return $vehicules;
}
