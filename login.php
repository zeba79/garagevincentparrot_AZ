<?php
    require_once __DIR__.  '/config/config.php';
    require_once __DIR__.  '/lib/session.php';
    require_once __DIR__.  '/lib/pdo.php';
    require_once __DIR__.  '/lib/user.php';
    require_once __DIR__.  '/lib/menu.php';
    require_once __DIR__.  '/templates/header.php';
 

    $errors = [];
    if(isset($_POST["loginUser"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $user = userLoginAndPasswordVefify($pdo, $email, $password);

        if($user){
            session_regenerate_id(true);
            $_SESSION["user"] = $user;
        if ($user["role"] === "user") {
          header("location: index.php");
        } elseif($user["role"] === "admin"){
            header("location: admin/index.php");
        }
        } else {
            $errors[] = "Email ou mot de passe incorrect";
        }
        
    }
// // Requette d'insertion utilisateur dans la BDD
// $query = $pdo->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
// $query->bindValue(":email", "zoulou@zoulou.fr", PDO::PARAM_STR);
// $query->bindValue(":password", password_hash('zoulou', PASSWORD_BCRYPT ));
// $query->execute();

?>
<h1 class="mx-5"> LogIn</h1>

<?php
foreach ($errors as $error) { ?>
 <div class="alert alert-danger mx-5">
    <?=$error?>
 </div>
<?php }?>

<form action="" method="post">
<div class="mb-3 mx-5">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" id="email" class="form-control">
</div>
<div class="mb-3 mx-5">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" name="password" id="password" class="form-control">
</div>
<input type="submit" value="Connexion" name="loginUser" class="btn parrotbtn mx-5">
</form>
<?php
    require_once __DIR__."/templates/footer.php";

?>