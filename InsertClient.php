<?php
include('connect.php');
if(isset($_POST['nom'])&&isset($_POST['prenom'])&&isset($_POST['email'])&&isset($_POST['mdp'])&&$_POST['email']==$_POST['emailC']&&$_POST['mdp']==$_POST['mdpC'])
  {

  $adresse = $_POST['num']." ".$_POST['ville']." ".$_POST['postal'];
  $req = 'INSERT INTO client(nom, prenom, adresse, socio, mail, telephone, caract, mdp) VALUES (:nom,:prenom,:adresse,:socio,:mail,:telephone,:caract,:mdp)';
  $stm = $dbh->prepare($req);

  $stm->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);
  $stm->bindValue(':prenom' , $_POST['prenom'], PDO::PARAM_STR);
  $stm->bindValue(':adresse', $adresse, PDO::PARAM_STR);
  $stm->bindValue(':socio', $_POST['socio'], PDO::PARAM_STR);
  $stm->bindValue(':mail', $_POST['email'], PDO::PARAM_STR);
  $stm->bindValue(':telephone', $_POST['num_tel'], PDO::PARAM_STR);
  $stm->bindValue(':caract', "prospect", PDO::PARAM_STR);
  $stm->bindValue(':mdp', $_POST['mdp'], PDO::PARAM_STR);
  $resul = $stm->execute();

  if($resul == 1){

    echo '<script> alert("Utilisateur créer"); document.location.href= "index.php"; </script>' ;

  }else { echo '<script> alert("Erreur lors de la création");  document.location.href= "index.php";</script>' ;}

}

?>
