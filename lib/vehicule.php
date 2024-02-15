<?php
// offset = (page-1) * limit

// recupérer tous les véhicules dans la BDD avec tri decroissant
function getVehicules(PDO $pdo, int $limit = null,  int $page = null): array
{
    $sql = "SELECT * FROM vehicules ORDER BY id";
if($limit && !$page){
    $sql .= " LIMIT :limit";
}
if($page){
    $sql .= " LIMIT :offset, :limit";
}
    $query = $pdo->prepare($sql);
    if($limit){
        $query->bindValue(":limit", $limit, PDO::PARAM_INT);
    }
    if($page){
        $offset = ($page - 1) * $limit;
        $query->bindValue(":offset", $offset, PDO::PARAM_INT);
    }
    $query->execute();
    $vehicules = $query->fetchAll(PDO::FETCH_ASSOC);
    return $vehicules;
}

// recupérer un véhicule par son ID
function getVehiculeById(PDO $pdo, int $id): array|bool
{
    $sql = "SELECT * FROM vehicules WHERE id = :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    $vehicule = $query->fetch(PDO::FETCH_ASSOC);
    return $vehicule;
}

// recuperer une image depuis la BDD
function getVehiculeImage( string|null $image ): string
{
    if($image === null ){
       return _ASSETS_IMAGES_DEFAULT_."defaultcar.jpg";
        } else {
           return _UPLOADS_IMAGES_.htmlentities($image);
        }
}

// recupérer le nombre total de pages dans la BDD
function getTotalvehicules(PDO $pdo): int
{
    $sql = "SELECT COUNT(*) as total FROM vehicules ";
    $query = $pdo->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result["total"];
}
