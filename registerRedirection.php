<?php
require_once __DIR__.  '/config/config.php';
require_once  __DIR__. '/lib/menu.php';
require_once __DIR__.  '/templates/header.php';
?>
<a href="index.php" class="btn parrotbtn mx-3 px-3">Retour à la page d'acceuil</a>
<h4 class="alert alert-danger mx-5 text-center">
    <?php echo "Insertion réussie dans la base de données"?>
</h4>


<?php
require_once __DIR__. '/templates/footer.php';
?>

