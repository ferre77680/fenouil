<?php
include('connect.php');
$req = "UPDATE article SET num_ref=:num_ref, designation=:designation, image=:image WHERE id=:id";
$stm=$dbh->prepare($req);
$stm->bindParam(':num_ref', $_POST['num_ref'], PDO::PARAM_STR);
$stm->bindValue(':designation' , $_POST['designation'], PDO::PARAM_STR);
$stm->bindValue(':image', $_POST['image'], PDO::PARAM_STR);
$stm->bindValue(':id', $_POST['id'], PDO::PARAM_STR);

$resul=$stm->execute();
if($resul == 1) {

    echo '<script> alert(" Mise à jour reussie  "); document.location.href = "index.php";</script>' ;

}else { echo '<script> alert("Erreur"); </script>' ;}
?>
