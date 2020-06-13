<?php
include('connect.php');
$req =  "SELECT * FROM cibleroutage ORDER BY id";
$resul = $dbh->query($req);
$tableauCible = $resul->fetchALL(PDO::FETCH_ASSOC);

 ?>
