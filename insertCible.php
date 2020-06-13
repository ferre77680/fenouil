<?php
include('connect.php');

if(isset($_POST['Age'])&&isset($_POST['Departement'])&&isset($_POST['typeIndividu'])&&isset($_POST['typePub']))

{

$sql = 'INSERT INTO cibleroutage( age, departement , typeindividu , typepub , valide) VALUES (:Age,:Departement,:typeIndividu,:typePub,:valide)';

$stm=$dbh->prepare($sql);
$stm->bindParam(':Age', $_POST['Age'], PDO::PARAM_STR);
$stm->bindValue(':Departement' , $_POST['Departement'], PDO::PARAM_STR);
$stm->bindValue(':typeIndividu', $_POST['typeIndividu'], PDO::PARAM_STR);
$stm->bindValue(':typePub', $_POST['typePub'], PDO::PARAM_STR);
$stm->bindValue(':valide', "Non", PDO::PARAM_STR);

    $nbligne = $stm->execute();


   if($nbligne == 1) {

            echo '<script> alert("Les données sont bien enregistrées");  document.location.href = "index.php";</script>' ;

    }else { $erreur = implode("','",$stm->errorInfo()); // implode permet convertir un tableau en chaîne de caractères
    echo '<script> alert("'.$erreur.'");  document.location.href= "index.php";</script>' ;}



}else { '<script> alert("POST");  document.location.href= "index.php";</script>' ;}


?>
