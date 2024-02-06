<?php
require_once __DIR__.  '/templates/header.php'
?>
<?php
require_once  __DIR__. '/lib/vehicule.php'
?>

<div class="row">
    <?php foreach($vehicules as $key => $vehicule){
        require  __DIR__. '/templates/vehicule_part.php';
        } ?>
</div>


<?php
require_once __DIR__. '/templates/footer.php';
?>

