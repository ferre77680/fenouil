<?php
include('connect.php');

$req = "SELECT * FROM article";
$resul = $dbh->query($req);
$tableauArticles = $resul->fetchALL(PDO::FETCH_ASSOC);

?>
