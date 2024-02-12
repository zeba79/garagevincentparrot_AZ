<?php
$imagePath = getVehiculeImage($vehicule["image"])
?>
        <div class="col-md-3 my-2">
            <div class="card">
                    <img src="<?= $imagePath ?>"
                    class="card-img-top" alt="Logo Vincent Parrot" >
                <div class="card-body">
                    <h2 class="card-title"><?= $vehicule["marque"]?></h2>
                    <p class="card-text">Année : <?= htmlentities($vehicule["annee"])?></p>
                    <p class="card-text">Carburant : <?= htmlentities($vehicule["carburant"])?></p>
                    <p class="card-text"> Kilométrage : <?= htmlentities($vehicule["kilometrage"])?></p>
                    <p class="card-text"> Prix : <?= htmlentities($vehicule["prix"])?></p>
                    <a href="vehicule.php?id=<?=$vehicule["id"]?>"
                    class="btn btn-primary btn-lg px-4 me-md-2 ">Voir détails</a>
                </div>
            </div>
        </div>