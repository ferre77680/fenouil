<?php
include('connect.php');

if(isset($_POST['numcommande'])){
  $req =  "SELECT anomalie.id, anomalie.numcommande, anomalie.typeerreur, client.nom, client.prenom, client.telephone, anomalie.date FROM anomalie, client WHERE anomalie.id_client=client.id AND anomalie.numcommande=:numcommande ORDER BY id";
  $stm = $dbh->prepare($req);
  $numcommande = $_POST['numcommande'];
  $bool = $stm->execute(array(':numcommande'=>$numcommande));
  $tableauAnomalie = $stm->fetchALL(PDO::FETCH_ASSOC);
}
elseif(isset($_POST['typeerreur'])) {
  $req =  "SELECT anomalie.id, anomalie.numcommande, anomalie.typeerreur, client.nom, client.prenom, client.telephone, anomalie.date FROM anomalie, client WHERE anomalie.id_client=client.id AND anomalie.typeerreur=:typeerreur ORDER BY id";
  $stm = $dbh->prepare($req);
  $typeerreur = $_POST['typeerreur'];
  $bool = $stm->execute(array(':typeerreur'=>$typeerreur));
  $tableauAnomalie = $stm->fetchALL(PDO::FETCH_ASSOC);
}
elseif(isset($_POST['client'])) {
  $req =  "SELECT anomalie.id, anomalie.numcommande, anomalie.typeerreur, client.nom, client.prenom, client.telephone, anomalie.date FROM anomalie, client WHERE anomalie.id_client=client.id AND anomalie.id_client=:id_client ORDER BY id";
  $stm = $dbh->prepare($req);
  $id_client = $_POST['client'];
  $bool = $stm->execute(array(':id_client'=>$id_client));
  $tableauAnomalie = $stm->fetchALL(PDO::FETCH_ASSOC);
}
elseif(isset($_POST['date'])){
  $req =  "SELECT anomalie.id, anomalie.numcommande, anomalie.typeerreur, client.nom, client.prenom, client.telephone, anomalie.date FROM anomalie, client WHERE anomalie.id_client=client.id AND anomalie.date=:date ORDER BY id";
  $stm = $dbh->prepare($req);
  $date = $_POST['date'];
  $bool = $stm->execute(array(':date'=>$date));
  $tableauAnomalie = $stm->fetchALL(PDO::FETCH_ASSOC);
}
else echo 'submit erreur';

if ( !empty($tableauAnomalie)){
       $res = http_build_query($tableauAnomalie);
        header("Location:listeAnomalie.php?".$res);
 }else {

     echo '<script> alert("erreur");</script>' ;
 }
 ?>
