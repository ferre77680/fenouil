<?php
include('connect.php');

$req = "SELECT id, mail FROM client";
$resul = $dbh->query($req);
$tableauCommande = $resul->fetchALL(PDO::FETCH_ASSOC);

?>
