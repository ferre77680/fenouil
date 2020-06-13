<?php
session_start();
include('fonctionPanier.php');
?>
<!DOCTYPE>
<html>
<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">

        <script src="js/jquery-3.1.1.js"></script>
        <!-- Popper JS -->
        <script src="js/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    //#inscrire correspond à l'id de la balise <a
    $("#inscrire").click(function(){
        //#contenue correspond à l'id de la balise <div
        $("#contenu").load("forminscription.php");
    });
    $("#ClientCreate").click(function(){
        $("#contenu").load("forminscription.php");
    });
    $("#ArticleCreate").click(function(){
        $("#contenu").load("formulaireCreateArticle.php");
    });
    $("#AffichePanier").click(function(){
        $("#contenu").load("panier.php");
    });
    $("#searchC").click(function(){
        $("#contenu").load("formulaireSearchC.php");
    });
    $("#searchE").click(function(){
        $("#contenu").load("formulaireSearchE.php");
    });
    $("#searchCl").click(function(){
        $("#contenu").load("formulaireSearchCl.php");
    });
    $("#searchD").click(function(){
        $("#contenu").load("formulaireSearchD.php");
    });
    $("#acc").click(function(){
        // actualiser la page index.php
        location.reload(true);
    });
    $("#affiche").click(function(){
         $("#contenu").load("selectCible.php");
    });
    $("#conn").click(function(){
         $("#contenu").load("formulaireConnexion.php");
    });
    $("#ajout").click(function(){
         $("#contenu").load("formulaireCible.php");
    });
    $("#liste").click(function(){
         $("#contenu").load("selectClient.php");
    });
    $("#listeA").click(function(){
         $("#contenu").load("selectArticle.php");
    });
    $("#listeC").click(function(){
         $("#contenu").load("selectCommande.php");
    });
    $("#ajoutC").click(function(){
         $("#contenu").load("formulaireCommande.php");
    });

     $("#deconn").click(function(){
         $.ajax({
		type:"POST",
		url:"deconnect.php",
		success:function(data)
		{
			// Version 2

                        location.reload(true);

		},
		error : function()
		{
			alert('Erreur du script PHP');
		}
		});
    });
});
</script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

 <p>FENOUIL</p>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

    <ul class="navbar-nav mr-auto mt-3 mt-lg-1">
      <li class="nav-item active">
        <a class="nav-link" id= "acc" href="#"> Accueil <span class="sr-only">(current)</span></a>
      </li>
<li class="nav-item">
<?php if(!empty($_SESSION['Client']) || empty($_SESSION['Responsable de donnee']) && empty($_SESSION['Gestionnaire administratif']) && empty($_SESSION['Directeur Strategique']) && empty($_SESSION['Assistants de saisie']) && empty($_SESSION['Prospection'])){ ?>
  <li class="nav-item active">
    <a class="nav-link" id="AffichePanier" href="#"> Panier <span class="sr-only">(current)</span></a>
  </li>
  <?php }?>
</li>
  <li class="nav-item">
        <div class="dropdown">
<?php if(!empty($_SESSION['Responsable de donnee'])) {?>
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Article
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a id ="ArticleCreate" href="#" title="Ajouter">Ajouter</a></li>
 <div class="dropdown-divider"></div>
<li><a  id="listeA" href="#" title="Afficher">Afficher</a></li>
</ul>
</div>
      </li>
<?php }?>

<li class="nav-item">

        <div class="dropdown">
<?php if(!empty($_SESSION['Responsable de donnee'])) {?>
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Client
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a id ="ClientCreate" href="#" title="Ajouter">Ajouter</a></li>
 <div class="dropdown-divider"></div>
<li><a  id="liste" href="#" title="Afficher">Afficher</a></li>
</ul>
</div>
      </li>
<?php }?>

        <div class="dropdown">
<?php if(!empty($_SESSION['Prospection']) || !empty($_SESSION['Directeur Strategique'])) {?>
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Cible Routage
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a id ="ajout" href="#" title="Ajouter">Ajouter</a></li>
 <div class="dropdown-divider"></div>
<li><a  id="affiche" href="#" title="Afficher">Afficher</a></li>
</ul>
</div>
      </li>
<?php }?>
      </li>
      <li class="nav-item">
      <div class="dropdown">
<?php if(!empty($_SESSION['Assistants de saisie'])) {?>
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Commande
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a id ="ajoutC" href="#" title="Ajouter">Ajouter</a></li>
<div class="dropdown-divider"></div>
<li><a  id="listeC" href="#" title="Afficher">Afficher</a></li>
</ul>
</div>
    </li>
<?php }?>
<li class="nav-item">
<div class="dropdown">
<?php if(!empty($_SESSION['Gestionnaire administratif'])) {?>
<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
Search Anomalie
<span class="caret"></span>
</button>
<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li><a id ="searchC" href="#" title="Ajouter">Commande</a></li>
<div class="dropdown-divider"></div>
<li><a  id="searchE" href="#" title="Afficher">Type Erreur</a></li>
<div class="dropdown-divider"></div>
<li><a  id="searchCl" href="#" title="Afficher">Client</a></li>
<div class="dropdown-divider"></div>
<li><a  id="searchD" href="#" title="Afficher">Date</a></li>
</ul>
</div>
</li>
<?php }?>
    </ul>

    <?php


      if(empty($_SESSION['Prospection']) && empty($_SESSION['Directeur Strategique']) && empty($_SESSION['Assistants de saisie']) && empty($_SESSION['Gestionnaire administratif']) && empty($_SESSION['Responsable de donnee']) && empty($_SESSION['Client']))
      {
     echo '<li class="nav-item">
        <a id="conn" class="nav-link" href="#">  Se connecter  </a>
      </li>' ;
       echo' <li class="nav-item">
        <a id="inscrire" class="nav-link" href="#">S\'inscrire  </a>
      </li>';
      }
      ?>

  <?php if(!empty($_SESSION['Prospection']) || !empty($_SESSION['Directeur Strategique']) || !empty($_SESSION['Assistants de saisie']) || !empty($_SESSION['Gestionnaire administratif']) || !empty($_SESSION['Responsable de donnee']) || !empty($_SESSION['Client']))
    echo '<li class="nav-item">
        <a id="deconn" class="nav-link" href="#">  Se déconnecter  </a>
      </li>' ;
      ?>

  </div>
</nav>
<br>

<div id = "contenu" class="container-fluid">
  <div class="row">
  <?php
  include('article.php');
  foreach ($tableauArticles as $cle => $valeur) {
    echo '<div class="col-sm-3" style="padding-bottom: 15px;">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="data:image/jpg;base64,' . $valeur['image'] . '"  alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">'. $valeur['num_ref'] .'</h5>
      <p class="card-text">'. $valeur['designation'] .'</p>
      <a href="addPanier.php?id='. $valeur['id'] .'" class="btn btn-primary">'. $valeur['prix'].'$' .'</a>
    </div>
  </div>
  </div>';
  }

   ?>
</div>
</div>

</body>
</html>
