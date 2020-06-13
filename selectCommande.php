<?php
include('connect.php');

$req = "SELECT commande.id,commande.num_commande, commande.quantite, paiement.moyen, paiement.infosmoyen1, paiement.infosmoyen2, paiement.montantglobal, paiement.montantrentre, client.nom, client.prenom, client.telephone, commande.etat FROM commande, paiement, client WHERE commande.id_paiement=paiement.id AND commande.id_client=client.id ORDER BY id";
$resul = $dbh->query($req);
$tableauCommande = $resul->fetchALL(PDO::FETCH_ASSOC);

if (!empty($tableauCommande)){
       $res = http_build_query($tableauCommande);
        header("Location:listeCommande.php?".$res);
 }else {

     echo '<script> alert("erreur");</script>' ;
 }
?>
