<?php

// // protéger la session de connexion
// session_set_cookie_params([
// 'lifetime' => 3600,
// 'path' => '/',
// 'domain' => _DOMAIN_SESSION_,
// // 'secure' => true,
// 'httponly' => true
// ]);

session_start();

function adminAccess(){
    if (!isset($_SESSION["user"])) {
        // rediriger user vers la page de connexion
        header('location: ../login.php');
      } elseif ($_SESSION["user"]["role"] != "admin"){
        // rediriger user vers accueil
        header('location: ../index.php');
      }
}