<?php
include('connect.php');
$req = 'UPDATE client SET caract=:caract WHERE id =:id';
$valeur = array(':caract'=>$_POST['caract'],':id'=>$_POST['id']) ;
$stm = $dbh->prepare($req);
$resul=$stm->execute($valeur);
if($resul == 1) {

    echo '<script> alert(" Mise à jour reussie  "); document.location.href = "index.php";</script>' ;

}else { echo '<script> alert("Erreur"); </script>' ;}

?>
