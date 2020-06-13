<?php session_start(); ?>
<script>
function deleteClient(id)
	{
		$.ajax({
		type:"GET",
		url:"deleteClient.php",
        data:"id="+id,
		success:function(data)
		{

      <?php if(!empty($_SESSION['Responsable de donnee'])) {?>
      $("#contenu").load("selectClient.php");
      <?php }?>
		},
		error : function()
		{
			alert('Erreur du script PHP');
		}
		});
	}

function UpdateClient(id)
	{

			// Version 2
       lien = "formulaireUpdateClient.php?id="+id;
			console.log(lien);
    $("#contenu").load(lien);

	}


</script>
        <div  class="w-75 p-1" id="container">
            <h1>Liste des Clients</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>ID</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>Socio-professionnel</th>
                        <th>Mail</th>
												<th>Telephone</th>
												<th>Carateristique commerciale</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($_GET as $cle=>$valeur) {
                      echo '<tr>';


                        echo '<td>'.$valeur['id'].'</td><td>'.$valeur['nom'].'</td><td>'.$valeur['prenom'].
												'</td><td>'.$valeur['adresse'].'</td><td>'.$valeur['socio'].'</td><td>'.$valeur['mail'].'</td><td>'.$valeur['telephone'].'</td><td>'.$valeur['caract'].'</td><td>
                        <a href="#" onclick="deleteClient('.$valeur['id'].')">Supprimer </a>
                        <a href="#" onclick="UpdateClient('.$valeur['id'].')">Modifier</a></td>' ;


                   echo '</tr>';
                     }?>
                </tbody>
            </table>

</div>
