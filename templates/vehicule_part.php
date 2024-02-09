        <?php
if($vehicule["image"] === null ){
$imagePath = "/assets/images/defaultcar.jpg";

} else {
    $imagePath = "/uploads/vehicules/".htmlentities($vehicule["image"]);
}

        ?>
        
        
        <div class="col-md-3 my-2">
            <div class="card">
                    <img src="<?= $imagePath ?>"
                    class="card-img-top" alt="Logo vincent Parrot" >
                <div class="card-body">
                    <h2 class="card-title"><?= $vehicule["marque"]?></h2>
                    <p class="card-text">Année : <?= $vehicule["annee"]?></p>
                    <p class="card-text">Carburant : <?= $vehicule["carburant"]?></p>
                    <p class="card-text"> Kilométrage : <?= $vehicule["kilometrage"]?></p>
                    <p class="card-text"> Prix : <?= $vehicule["prix"]?></p>
                    <a href="vehicule.php?id=<?=$key?>" class="btn btn-primary btn-lg px-4 me-md-2 ">Voir détails</a>
                </div>
            </div>
        </div>