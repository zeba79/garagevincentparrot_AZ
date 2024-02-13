<?php
$currentPage = basename($_SERVER["SCRIPT_NAME"]);
?>

<?php
require_once  __DIR__. '/../lib/session.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desccription" content="<?=@htmlentities($mainMenu[$currentPage]["meta_description"])?>">
    <title><?= htmlentities($mainMenu[$currentPage]["head_title"])?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
</head>
<body>

<div class="col">
      <header class="d-flex flex-wrap align-items-center
      justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
  <div class="col-md-3 mb-2 mb-md-0">
         <a href="index.php"><img src="/assets/images/logoVParrot.jpg" alt="Logo vincent Parrot" width="100px"></a></a>
  </div>

    <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <?php foreach ($mainMenu as $key => $menuItem) {
          if( !array_key_exists("exclude", $menuItem)){
          ?>
          <li class="nav-item"><a href="<?=$key; ?>" class="nav-link px-2
          <?php if($key === $currentPage) { echo "active";}
          // ternaire echo($key === $currentPage) ? "active" : "";
          ?>">
          <?= htmlentities($menuItem["title_menu"]); ?></a></li>
          <?php }
          }
          ?>
    </ul>
  <div class="col-md-3 text-end">

  <?php
  // si utilisateur connecté, on affiche Deconnexion, sinon on affiche Connexion
  if (isset($_SESSION["user"])) { ?>
    <a href="logout.php" class="btn btn-primary">Deconnexion</a>
    <?php } else {?>
      <a href="login.php" class="btn btn-outline-primary me-2">Connexion</a>
    <?php } ?>
  </div>
</div>
</header>

