<?php
session_start();
include('connect.php');
if(!empty($_SESSION['Directeur Strategique'])){
$req = "UPDATE cibleroutage SET valide='Oui' WHERE id =:id";
$valeur = array(':id'=>$_GET['id']) ;
$stm = $dbh->prepare($req);
$resul=$stm->execute($valeur);
if($resul == 1) {

    echo '<script> alert(" Mise à jour reussie  "); document.location.href = "index.php";</script>' ;

}else { echo '<script> alert("Erreur"); </script>' ;}
};

if(!empty($_SESSION['Prospection'])){

$req = "UPDATE cibleroutage SET age=:age, departement=:departement, typeindividu=:typeindividu, typepub=:typepub WHERE id=:id";
$stm=$dbh->prepare($req);
$stm->bindParam(':age', $_POST['age'], PDO::PARAM_STR);
$stm->bindValue(':departement' , $_POST['departement'], PDO::PARAM_STR);
$stm->bindValue(':typeindividu', $_POST['typeindividu'], PDO::PARAM_STR);
$stm->bindValue(':typepub', $_POST['typepub'], PDO::PARAM_STR);
$stm->bindValue(':id', $_POST['id'], PDO::PARAM_STR);

$resul=$stm->execute();
if($resul == 1) {

    echo '<script> alert(" Mise à jour reussie  "); document.location.href = "index.php";</script>' ;

}else { echo '<script> alert("Erreur"); </script>' ;}
};
?>
