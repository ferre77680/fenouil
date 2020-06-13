<?php session_start(); ?>
<script>
function deleteArticle(id)
	{
		$.ajax({
		type:"GET",
		url:"deleteArticle.php",
        data:"id="+id,
		success:function(data)
		{

      <?php if(!empty($_SESSION['Responsable de donnee'])) {?>
      $("#contenu").load("selectArticle.php");
      <?php }?>
		},
		error : function()
		{
			alert('Erreur du script PHP');
		}
		});
	}

function UpdateArticle(num_ref,designation,prix,id)
	{

			// Version 2
       lien = "formulaireUpdateArticle.php?num_ref="+num_ref+"&designation="+designation+"&prix="+prix+"&id="+id;
			console.log(lien);
    $("#contenu").load(lien);

	}


</script>
        <div  class="w-75 p-1" id="container">
            <h1>Liste des Articles</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>ID</th>
                        <th>Numero de Reference</th>
                        <th>Designation</th>
                        <th>Prix</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($_GET as $cle=>$valeur) {
                      echo '<tr>';


                        echo '<td>'.$valeur['id'].'</td><td>'.$valeur['num_ref'].'</td><td>'.$valeur['designation'].
												'</td><td>'.$valeur['prix'].'</td><td>
                        <a href="#" onclick="deleteArticle('.$valeur['id'].')">Supprimer </a>
                        <a href="#" onclick="UpdateArticle(' ;

												echo "'".urlencode($valeur['num_ref'])."',";
												echo "'".urlencode($valeur['designation'])."',";
												echo "'".urlencode($valeur['prix'])."',";
						            echo $valeur['id'].')">Modifier</a></td>';


                   echo '</tr>';
                     }?>
                </tbody>
            </table>

</div>
