<?php
$mainMenu = [
  "index.php" =>[ "title_menu" => "Accueil", "meta_description" => "Garage Vincent Parrot, de la mécanique à l'entretien..." ],
  "mecanique.php" =>[ "title_menu" => "Mécanique Générale", "meta_description" => "Garage Vincent Parrot, c'est la mécanique générale..." ],
  "carrosserie.php" =>[ "title_menu" => "Carrosserie", "meta_description" => "Garage Vincent Parrot, au service de la carrosserie..." ],
  "entretien.php" =>[ "title_menu" => "Entretien", "meta_description" => "Garage Vincent Parrot, confiez-nous votre entretien auto..." ],
  "vehicules.php" =>[ "title_menu" => "Véhicules d'occasions", "meta_description" => "Garage Vincent Parrot, c'est aussi les véhicules d'occasions..." ],
  "contact.php" =>[ "title" => "Nous contacter", "meta_description" => "Garage Vincent Parrot, contacter-nous..." ],

];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desccription" content="">
    <title>Vincent Parrot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
</head>
<body>

<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
         <a href="#"><img src="/assets/images/logoVParrot.jpg" alt="Logo vincent Parrot" width="100px"></a></a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
<?php
foreach ($mainMenu as $key => $mainItem) {?>
  <li class="active"><a href="<?=$key ?>" class="nav-link px-2 link-secondary"><?=$mainItem["title_menu"] ?></a></li>
      </ul>
<?php } ?>

 

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div>

