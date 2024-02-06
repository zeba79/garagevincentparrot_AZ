<?php 
$vehicules = [
    [ "image"=> "cadillac.jpg","description" => "CADILLAC", "annee"=> 2015,
    "carburant" => "Diesel","kilometrage" => 25000, "prix"=> 25000 ],

    [ "image"=> "chevrolet.jpg","description" => "CHEVROLET", "annee"=> 2015,
    "carburant" => "Diesel", "kilometrage" => 25000, "prix"=> 25000 ],

    [ "image"=> "chrysler.jpg","description" => "chrysler", "annee"=> 2015,
    "carburant" => "Diesel", "kilometrage" => 25000, "prix"=> 25000 ],

    [ "image"=> "range-rover.jpg","description" => "range-rover", "annee"=> 2015,
    "carburant" => "Diesel", "kilometrage" => 25000, "prix"=> 25000 ],
];

?>

<?php
include_once './partials/_header.php'
?>
<?php
include_once './partials/_main.php'
?>



<div class="row">
    <?php foreach($vehicules as $key => $vehicule){
        include './partials/_vehicule.php';
        } ?>
</div>


<?php
include_once './partials/_footer.php';
?>

