<?php

require_once  __DIR__. '/lib/vehicule.php';

$id = $_GET["id"];
$vehicule = $vehicules[$id];

require_once  __DIR__. '/lib/menu.php';

$mainMenu["vehicule.php"] = [ "image" => $vehicule["image"], "description" => $vehicule["description"],
"annee" => $vehicule["annee"], "carburant" => $vehicule["carburant"], "kilometrage" => $vehicule["kilometrage"],
"prix" => $vehicule["prix"] ];

require_once __DIR__.  '/templates/header.php';

?>
<div class="container col-xxl-20 px-4 py-5">
       
         
                    ddd
               

                </div>
            </div>
        </div>
</div>

<div class="container col-xxl-8 px-4 py-5">
<div class="card">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <a href="index.php">
          <img src="/uploads/vehicules/<?= $vehicule["image"]?>"  class="d-block mx-lg-auto img-fluid"
          alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </a>
      </div>
      <div class="col-lg-6">
      <h2 class="card-title"><?= $vehicule["description"]?></h2>
                    <p class="card-text">Année : <?= $vehicule["annee"]?></p>
                    <p class="card-text">Carburant : <?= $vehicule["carburant"]?></p>
                    <p class="card-text"> Kilométrage : <?= $vehicule["kilometrage"]?></p>
                    <p class="card-text"> Prix : <?= $vehicule["prix"]?></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="vehicules.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos véhicules d'Occasion</a>
</div>
        </div>
      </div>
    </div>
  </div>

  
<?php
require_once __DIR__. '/templates/footer.php';
?>
