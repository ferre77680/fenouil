<?php
include('connect.php');

$req = "SELECT id, nom, prenom, adresse, socio, mail, telephone, caract FROM client";
$resul = $dbh->query($req);
$tableauClient = $resul->fetchALL(PDO::FETCH_ASSOC);

if ( !empty($tableauClient)){
       $res = http_build_query($tableauClient);
        header("Location:listeClient.php?".$res);
 }else {

     echo '<script> alert("erreur");</script>' ;
 }
?>
