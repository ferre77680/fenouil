<?php
session_start();
include('connect.php');
include('fonctionPanier.php');
$req = 'SELECT num_ref, prix FROM article WHERE id='.$_GET['id'];
$resul = $dbh->query($req);
$tableauPanier = $resul->fetchALL(PDO::FETCH_ASSOC);

ajouterArticle($tableauPanier[0]['num_ref'], $tableauPanier[0]['prix']);
$nbArticles=count($_SESSION['panier']['num_ref']);
if($nbArticles > 0){
  echo '<script> alert("Article ajouter au panier");  document.location.href = "index.php";</script>' ;
}
else { echo '<script> alert("erreur");  document.location.href = "index.php";</script>' ;}

 ?>
