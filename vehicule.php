<?php

require_once  __DIR__. '/lib/vehicule.php';

$id = $_GET["id"];
$vehicule = $vehicules[$id];

require_once  __DIR__. '/lib/menu.php';

$mainMenu["vehicule.php"] = [ "image" => $vehicule["image"], "description" => $vehicule["description"], "annee" => $vehicule["annee"],
"carburant" => $vehicule["carburant"], "kilometrage" => $vehicule["kilometrage"], "prix" => $vehicule["prix"], "exclude " => true  ];

require_once __DIR__.  '/templates/header.php';

?>
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
                    <a href="vehicule.php" class="btn btn-primary btn-lg px-4 me-md-2 ">Voir détails</a>
                </div>
            </div>
        </div>

  
<?php
require_once __DIR__. '/templates/footer.php';
?>
