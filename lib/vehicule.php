<?php


function getVehicules(PDO $pdo, int $limit = null): array
{
    $sql = "SELECT * FROM vehicules ORDER BY id DESC";
if($limit){
    $sql .= " LIMIT :limit";
}
    $query = $pdo->prepare($sql);
    if($limit){
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    $query->execute();
    $vehicules = $query->fetchAll(PDO::FETCH_ASSOC);
    return $vehicules;
}

function getVehiculeById(PDO $pdo, int $id): array|bool
{
    $sql = "SELECT * FROM vehicules WHERE id = :id";

    $query = $pdo->prepare($sql);
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $vehicule = $query->fetch(PDO::FETCH_ASSOC);
    return $vehicule;
}

