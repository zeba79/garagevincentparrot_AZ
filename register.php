<?php
require_once __DIR__.  '/config/config.php';
require_once  __DIR__. '/lib/pdo.php';
require_once  __DIR__. '/lib/menu.php';
require_once  __DIR__. '/templates/header.php';
?>

<h1> <?=_WELLCOME_PAGE_?> contact !</h1>
<h1 class="mx-5"> LogIn</h1>

<form action="registerPost.php" method="post">
    <div class="mb-3 mx-5">
        <label for="last_name" class="form-label">Nom</label>
        <input type="text" name="last_name" id="last_name" class="form-control">
    </div>
    <div class="mb-3 mx-5">
        <label for="first_name" class="form-label">Prénom</label>
        <input type="text" name="first_name" id="first_name" class="form-control">
    </div>
    <div class="mb-3 mx-5">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3 mx-5">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <input type="submit" value="Envoyer" name="loginUser" class="btn btn-primary mx-5">
</form>
<?php
require_once  __DIR__. '/templates/footer.php';
?>

