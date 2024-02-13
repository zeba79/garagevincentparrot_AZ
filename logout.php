<?php
    require_once __DIR__.  '/config/config.php';
    require_once __DIR__.  '/lib/session.php';
    session_destroy(); // permet de détruire la session
    unset($_SESSION); // permet de ne pas garder le tableau de session en mémoire
    header('location : login.php');