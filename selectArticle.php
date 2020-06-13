<?php
include('connect.php');

$req = "SELECT * FROM article";
$resul = $dbh->query($req);
$tableauArticle = $resul->fetchALL(PDO::FETCH_ASSOC);

if ( !empty($tableauArticle)){
       $res = http_build_query($tableauArticle);
        header("Location:listeArticle.php?".$res);
 }else {

     echo '<script> alert("erreur");</script>' ;
 }
?>
