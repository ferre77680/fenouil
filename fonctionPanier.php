<?php
function createPanier() {
  if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
    $_SESSION['panier']['num_ref'] = array();
    $_SESSION['panier']['prix'] = array();
  }
  return true;
}

function ajouterArticle($libelle, $prix){

  if(createPanier()){
      array_push($_SESSION['panier']['num_ref'],$libelle);
      array_push($_SESSION['panier']['prix'], $prix);
    }
  else echo "erreur lors de l'ajout d'article";
}

function MontantGlobal(){
  $total = 0;
  for($i = 0; $i < count($_SESSION['panier']['num_ref']); $i++)
{
   $total += $_SESSION['panier']['prix'][$i];
}
return $total;
}



 ?>
