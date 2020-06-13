<?php
include('connect.php');
$req =  'DELETE FROM anomalie WHERE id = '.$_GET['id'];
$resul=$dbh->query($req);
if($resul == 1) {

    echo '<script> alert(" Suppression reussie  "); document.location.href = "index.php";

    </script>' ;

}else {
    $erreur = implode("','",$dbh->errorInfo());
    echo '<script> alert("'.$erreur.'"); </script>' ;}

?>
