<?php
//on démarrela session

session_start();

//on detruit les variables de notre session
session_unset();

//on détruit notre session
session_destroy() ;

//on redirige le visiteur vers la page d'acceuil
header('Location:index.php');
?>