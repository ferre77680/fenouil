<?php
include('connect.php');

$req =  "SELECT id FROM anomalie WHERE numcommande=:numcommande ORDER BY id";
$stm = $dbh->prepare($req);
$numcommande = $_GET['num_commande'];
$bool = $stm->execute(array(':numcommande'=>$numcommande));
$tableauAnomalie = $stm->fetchALL(PDO::FETCH_ASSOC);
if(empty($tableauAnomalie)){
  $req_update = "UPDATE commande SET etat='valide' WHERE id=:id";
  $valeur = array(':id'=>$_GET['id']) ;
  $stm = $dbh->prepare($req_update);
  $resul=$stm->execute($valeur);
  if($resul == 1) {
      echo '<script> alert("La commande est maintenant valide"); document.location.href = "index.php";</script>' ;
  }else { echo '<script> alert("Erreur lors de la validation"); </script>' ;}
  }
else{ echo '<script> alert("des anomalies sont presentent la commande ne peut etre valide"); document.location.href = "index.php";</script>' ;
}

//var_dump($tableauAnomalie);
?>
