<?php
require_once __DIR__.  '/config/config.php';
require_once  __DIR__. '/lib/menu.php';
require_once  __DIR__. '/templates/header.php';
?>

<h1 class="text-center"> <?=_WELLCOME_PAGE_?> contact !</h1>
<h2 class="mx-5"> Remplir le formulaire ci-dessous</h2>
<form action="#" method="post">
    <div class="mb-3 mx-5">
        <label for="last_name" class="form-label">Nom</label>
        <input type="text" name="last_name" id="last_name" class="form-control">
    </div>
    <div class="mb-3 mx-5">
        <label for="message" class="form-label">Votre Message</label>
        <textarea type="textarea" name="message" id="message" class="form-control"></textarea>
    </div>
    
    <input type="submit" value="Envoyer" name="messageContact" class="btn parrotbtn mx-5">
    <a href="register.php " class="nav-item btn parrotbtn mx-3 ">inscrivez-vous</a>
</form>

<?php
require_once  __DIR__. '/templates/footer.php';
?>

