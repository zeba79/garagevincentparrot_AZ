<div class="col-md-4 my-2">
            <div class="card">
                    <img src="/uploads/vehicules/<?= $vehicule["image"]?>"
                    class="card-img-top" alt="Logo vincent Parrot" >
                <div class="card-body">
                    <h2 class="card-title"><?= $vehicule["description"]?></h2>
                    <p class="card-text">Année : <?= $vehicule["annee"]?></p>
                    <p class="card-text">Carburant : <?= $vehicule["carburant"]?></p>
                    <p class="card-text"> Kilométrage : <?= $vehicule["kilometrage"]?></p>
                    <p class="card-text"> Prix : <?= $vehicule["prix"]?></p>
                    <a href="#" class="btn btn-primary text-center ">Voir détails</a>
                </div>
            </div>
        </div>

