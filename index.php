<?php

require_once  __DIR__. '/config/config.php';
require_once  __DIR__. '/lib/pdo.php';
require_once  __DIR__. '/lib/vehicule.php';
require_once  __DIR__. '/lib/menu.php';
require_once  __DIR__. '/templates/header.php';
require_once  __DIR__. '/templates/main.php';

$vehicules = getVehicules($pdo);
?>



<div class="row">
    <?php foreach($vehicules as $key => $vehicule){
        require  __DIR__. '/templates/vehicule_part.php';
        } ?>
</div>


<?php
require_once  __DIR__. '/templates/footer.php';
?>

