<?php session_start(); ?>
<script>
function deleteCible(id)
	{
	var bool=confirm("Voulez-vous supprimer la cible ?");
	if (bool==true){
		$.ajax({
		type:"GET",
		url:"deleteCible.php",
    data:"id="+id,
		success:function(data)
		{

			<?php if(!empty($_SESSION['Prospection']) || !empty($_SESSION['Directeur Strategique'])) {?>
			$("#contenu").load("selectCible.php");
			<?php }?>

		},
		error : function()
		{
			alert('Erreur du script PHP');
		}
		});
	 }
	}

function UpdateCible(id)
	{

		var bool=confirm("Valider la cible ?");
		if (bool==true){
			$.ajax({
			type:"GET",
			url:"updateCible.php",
	    data:"id="+id,
			success:function(data)
			{

				<?php if(!empty($_SESSION['Directeur Strategique'])) {?>
				$("#contenu").load("selectCible.php");
				<?php }?>

			},
			error : function()
			{
				alert('Erreur du script PHP');
			}
			});
		 }

	}

</script>
        <div  class="w-75 p-1" id="container">
            <h1>Liste des Cibles de Routages</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>id</th>
                        <th>Age</th>
                        <th>Departement</th>
                        <th>typeIndividu</th>
												<th>typePub</th>
												<th>Valide</th>
												<th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    // dans le fichier selectMatiere.php la ligne //header("Location:listeEtudiants.php?".$res); sert à envoyer les données à  la //page listeEtudiant avec methode get c'est à dire on stocke la valeur de la variable  $res dans le tableau $_GET
                    //  $_GET = $res
                    // parcourir le tableau $_GET pour afficher les données
                        foreach ($_GET as $cle=>$valeur) {
                      echo '<tr>';


                        echo '<td>'.$valeur['id'].'</td><td>'.$valeur['age'].'</td><td>'.$valeur['departement'].'</td><td>'.$valeur['typeindividu'].'</td><td>'.$valeur['typepub'].'</td><td>'.$valeur['valide'].'</td>
                        <td><a href="#" onclick="deleteCible('.$valeur['id'].')" >Supprimer </a>';
												if(!empty($_SESSION['Directeur Strategique'])){
													echo '<a href="#" onclick="UpdateCible('.$valeur['id'].')">Valider</a></td>';
												}


                   echo '</tr>';
                     }?>
                </tbody>
            </table>

</div>
