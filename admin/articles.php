<?php
require_once __DIR__.'/templates/header.php';
require_once __DIR__.'../../config/config.php';
require_once __DIR__.'../../lib/pdo.php';
require_once __DIR__.'../../lib/vehicule.php';

$vehicules = getVehicules($pdo);
var_dump($vehicules);

?>
<h1>Listes des véhicules</h1>
<table class="table">
  <!-- Entête du tableau -->
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titres</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <!-- Boucle foreach pour récupérer les éléments de la table véhicules dans la BDD -->
    <?php foreach($vehicules as $vehicule) {?>
      <tr>
          <th scope="row"><?=$vehicule["id"] ?></th>
          <td><?=$vehicule["marque"] ?></td>
          <td>Modifier | Supprimer</td>
      </tr>
    <?php } ?>
  </tbody>
</table>
<?php
require_once __DIR__.'/templates/footer.php';
?>