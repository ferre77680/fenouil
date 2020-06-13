<?php
session_start();
include('connect.php');
include('fonctionPanier.php');

$sql1 = 'INSERT INTO paiement(moyen, infosmoyen1, infosmoyen2, montantglobal, montantrentre) VALUES (:moyen,:infosmoyen1,:infosmoyen2,:montantglobal,:montantrentre)';
$moyen = 'carte';
$montantG = MontantGlobal();
$stm=$dbh->prepare($sql1);

$stm->bindParam(':moyen' , $moyen, PDO::PARAM_STR);
$stm->bindParam(':infosmoyen1' , $_POST['infosmoyen1'], PDO::PARAM_STR);
$stm->bindValue(':infosmoyen2', $_POST['infosmoyen2'], PDO::PARAM_STR);
$stm->bindValue(':montantglobal', $montantG, PDO::PARAM_STR);
$stm->bindValue(':montantrentre', $_POST['montantpayer'], PDO::PARAM_STR);
$nbligneP = $stm->execute();

   if($nbligneP == 1) {
     $req = "select currval('paiement_id_seq');";
     $resul = $dbh->query($req);
     $tbint = $resul->fetchALL(PDO::FETCH_ASSOC);
     $idP = $tbint[0]['currval'];
     $num_commande = "CO" . $idP;
     $quantite = $nbArticles=count($_SESSION['panier']['num_ref']);

     $sql2 = 'INSERT INTO commande(num_commande, quantite, id_paiement, id_client, etat) VALUES (:num_commande, :quantite, :id_paiement, :id_client, :etat)';
     $stm=$dbh->prepare($sql2);
     $stm->bindParam(':num_commande' , $num_commande, PDO::PARAM_STR);
     $stm->bindParam(':quantite' , $quantite, PDO::PARAM_STR);
     $stm->bindParam(':id_paiement', $idP, PDO::PARAM_STR);
     $stm->bindParam(':id_client', $_SESSION['Client']['id'], PDO::PARAM_STR);
     $stm->bindValue(':etat', "Invalide", PDO::PARAM_STR);
     $nbligneC = $stm->execute();
     if($nbligneC == 1){
       if($montantG != $_POST['montantpayer']){
         $date = date("Y-m-d");
         $sql3 = 'INSERT INTO anomalie(numcommande, typeerreur, id_client, date) VALUES(:numcommande, :typeerreur, :id_client, :date)';
         $stm=$dbh->prepare($sql3);
         $stm->bindParam(':numcommande' , $num_commande, PDO::PARAM_STR);
         $stm->bindValue(':typeerreur' , 'Erreur sur le montant', PDO::PARAM_STR);
         $stm->bindParam(':id_client', $_SESSION['Client']['id'], PDO::PARAM_STR);
         $stm->bindParam(':date', $date, PDO::PARAM_STR);
         $nbligneA = $stm->execute();
         if($nbligneA == 1){
            echo '<script> alert("Les données sont bien enregistrées mais avec anomalie");  document.location.href = "index.php";</script>' ;
         }
         else{
           echo '<script> alert("erreur anomalie");  document.location.href = "index.php";</script>' ;
         }

       }
       elseif(strlen($_POST['infosmoyen1']) != 16){
         $date = date("Y-m-d");
         $sql4 = 'INSERT INTO anomalie(numcommande, typeerreur, id_client, date) VALUES(:numcommande, :typeerreur, :id_client, :date)';
         $stm=$dbh->prepare($sql4);
         $stm->bindParam(':numcommande' , $num_commande, PDO::PARAM_STR);
         $stm->bindValue(':typeerreur' , 'Probleme sur le moyen de paiement', PDO::PARAM_STR);
         $stm->bindParam(':id_client', $_SESSION['Client']['id'], PDO::PARAM_STR);
         $stm->bindParam(':date', $date, PDO::PARAM_STR);
         $nbligneA2 = $stm->execute();
         if($nbligneA2 == 1){
           echo '<script> alert("Les données sont bien enregistrées mais avec anomalie");  document.location.href = "index.php";</script>' ;
         }
         else{
           echo '<script> alert("erreur anomalie");  document.location.href = "index.php";</script>' ;
         }
       }
       else {
         echo '<script> alert("Les données sont bien enregistrées");  document.location.href = "index.php";</script>' ;
       }
     }
     else { $erreur = implode("','",$stm->errorInfo()); // implode permet convertir un tableau en chaîne de caractères
     echo '<script> alert("'.$erreur.'"); document.location.href= "index.php";</script>' ;}


    }
    else { $erreur = implode("','",$stm->errorInfo()); // implode permet convertir un tableau en chaîne de caractères
    echo '<script> alert("'.$erreur.'");  document.location.href= "index.php";</script>' ;}



?>
