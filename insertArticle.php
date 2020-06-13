<?php
include('connect.php');

if(isset($_POST['num_ref'])&&isset($_POST['designation'])&&isset($_POST['prix']))

{

$sql = 'INSERT INTO article(num_ref , designation , prix, image) VALUES (:num_ref,:designation,:prix,:image)';
$image = addslashes($_FILES['image']['tmp_name']);
$image = file_get_contents($image);
$image = base64_encode($image);
$stm=$dbh->prepare($sql);
$stm->bindParam(':num_ref', $_POST['num_ref'], PDO::PARAM_STR);
$stm->bindValue(':designation' , $_POST['designation'], PDO::PARAM_STR);
$stm->bindValue(':prix', $_POST['prix'], PDO::PARAM_STR);
$stm->bindValue(':image', $image, PDO::PARAM_STR);
$nbligne = $stm->execute();
if($nbligne == 1) {

    echo '<script> alert("Les données sont bien enregistrées");  document.location.href = "index.php";</script>' ;

    }else { $erreur = implode("','",$stm->errorInfo()); // implode permet convertir un tableau en chaîne de caractères
    echo '<script> alert("'.$erreur.'");  document.location.href= "index.php";</script>' ;}



}else { '<script> alert("POST");  document.location.href= "index.php";</script>' ;}


?>
