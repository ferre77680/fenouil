<?php session_start(); ?>
<script>
function deleteCommande(id)
	{
		$.ajax({
		type:"GET",
		url:"deleteCommande.php",
        data:"id="+id,
		success:function(data)
		{

      <?php if(!empty($_SESSION['Assistants de saisie'])) {?>
      $("#contenu").load("selectCommande.php");
      <?php }?>
		},
		error : function()
		{
			alert('Erreur du script PHP');
		}
		});
	}

function UpdateCommande(num_commande,id)
	{

			// Version 2
       lien = "UpdateCommande.php?num_commande="+num_commande+"&id="+id;
			console.log(lien);
    $("#contenu").load(lien);

	}


</script>
        <div  class="w-75 p-1" id="container">
            <h1>Liste des Commandes</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>ID</th>
											 <th>Numero de commande</td>
                        <th>Quantite</th>
                        <th>Moyen de paiement</th>
                        <th>Infos de paiement 1</th>
                        <th>Infos de paiement 2</th>
                        <th>Montant de la Commande</th>
                        <th>Montant recus</th>
                        <th>Nom du client</th>
                        <th>Prenom du client</th>
                        <th>Numero de telephone</th>
                        <th>Etat de la commande</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($_GET as $cle=>$valeur) {
                      echo '<tr>';


                        echo '<td>'.$valeur['id'].'</td><td>'.$valeur['num_commande'].'</td><td>'.$valeur['quantite'].'</td><td>'.$valeur['moyen'].
												'</td><td>'.$valeur['infosmoyen1'].'</td><td>'.$valeur['infosmoyen2'].'</td><td>'.$valeur['montantglobal'].
                        '</td><td>'.$valeur['montantrentre'].'</td><td>'.$valeur['nom'].'</td><td>'.$valeur['prenom'].
                        '</td><td>'.$valeur['telephone'].'</td><td>'.$valeur['etat'].'</td><td>
                        <a href="#" onclick="deleteCommande('.$valeur['id'].')">Supprimer </a>
                        <a href="#" onclick="UpdateCommande(' ;
												echo "'".urlencode($valeur['num_commande'])."',";
												echo $valeur['id'].')">Valider</a></td>';


                   echo '</tr>';
                     }?>
                </tbody>
            </table>

</div>
