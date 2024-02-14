<?php
require_once __DIR__.'/templates/header.php';

require_once __DIR__.'../../lib/pdo.php';
require_once __DIR__.'../../lib/vehicule.php';



if (isset($_GET["page"])) {
  $page = (int)$_GET["page"];
} else {
  $page = 1;
}
$vehicules = getVehicules($pdo, _ADMIN_ITEM_PER_PAGE_, $page);

$totalVehicules = getTotalvehicules($pdo);

$totalPages = ceil($totalVehicules/_ADMIN_ITEM_PER_PAGE_);
?>
<h1>Listes des véhicules</h1>
<table class="table">
  <!-- Entête du tableau -->
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Marques</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <!-- Boucle foreach pour récupérer les éléments souhaités de la table véhicules dans la BDD -->
    <?php foreach($vehicules as $vehicule) {?>
      <tr>
          <th scope="row"><?=$vehicule["id"] ?></th>
          <td><?=$vehicule["marque"] ?></td>
          <td><a href="#">Modifier</a> | <a href="#">Supprimer</a></td>
      </tr>
    <?php } ?>
  </tbody>
</table>

<?php if($totalPages > 1){ ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
<!-- boucle for pour afficher le nombre de pages -->
<?php for($i = 1; $i <= $totalPages; $i++){ ?>
    <li class="page-item"><a class="page-link" href="?page=<?=$i?>"><?=$i?></a></li>
    <?php } ?>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
<?php } ?>

<?php
require_once __DIR__.'/templates/footer.php';
?>