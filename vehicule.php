<?php
require_once  __DIR__. '/config/config.php';
require_once  __DIR__. '/lib/pdo.php';
require_once  __DIR__. '/lib/vehicule.php';
require_once  __DIR__. '/lib/menu.php';

$error = false;

if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $vehicule = getVehiculeById($pdo, $id);

      if (!$vehicule) {

       $error = true;
        $mainMenu["vehicule.php"] = ["title_menu" =>"article introuvable", "meta_description" => "article introuvable" ,"head_title" => "article introuvable"];
      }
} else {
  $error = true;
  $mainMenu["vehicule.php"] = ["title_menu" =>"article introuvable", "meta_description" => "article introuvable" ,"head_title" => "article introuvable", "exclude" => true];
}

$imagePath = getVehiculeImage($vehicule["image"]);

require_once __DIR__.  '/templates/header.php';

?>

<?php if(!$error){ ?>

<div class="container col-xxl-8 px-4 py-5 ">
<div class="card">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <a href="index.php">
          <img src= "<?=$imagePath?>"  class="d-block mx-lg-auto img-fluid"
          alt="V Parrot" width="700" height="500" loading="lazy">
        </a>
      </div>
      <div class="col-lg-6">
      <h2 class="card-title"><?= htmlentities($vehicule["marque"])?></h2>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae excepturi saepe consequatur cumque tempore facilis optio consectetur alias cum commodi dolore, rem culpa explicabo laboriosam? Aperiam voluptate hic, accusamus expedita totam saepe a quo consequatur quidem necessitatibus minus at assumenda quod maxime pariatur asperiores sint suscipit ducimus fugiat itaque tenetur.
      </p>
                    <p class="card-text">Année : <?= htmlentities($vehicule["annee"])?></p>
                    <p class="card-text">Carburant : <?= htmlentities($vehicule["carburant"])?></p>
                    <p class="card-text"> Kilométrage : <?= htmlentities($vehicule["kilometrage"])?> Km</p>
                    <p class="card-text"> Prix : <?= htmlentities($vehicule["prix"])?> €</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="vehicules.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos véhicules d'Occasion</a>
</div>
        </div>
      </div>
    </div>
  </div>

  <?php } else {?>
  <h1> L'article est introuvable</h1>
    <?php }?>
<?php
require_once __DIR__. '/templates/footer.php';
?>
