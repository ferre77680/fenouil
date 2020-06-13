<?php session_start(); ?>
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
function deleteAnomalie(id)
	{
		$.ajax({
		type:"GET",
		url:"deleteAnomalie.php",
        data:"id="+id,
		success:function(data)
		{

      window.location = "index.php";
		},
		error : function()
		{
			alert('Erreur du script PHP');
		}
		});
	}

</script>
        <div  class="w-75 p-1" id="container">
            <h1>Liste des Anomalies</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>ID</th>
                        <th>Numero de commande</th>
                        <th>Type erreur</th>
                        <th>Nom client</th>
                        <th>Prenom client</th>
                        <th>Telephone client</th>
                        <th>Date creation anomalie</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($_GET as $cle=>$valeur) {
                      echo '<tr>';


                        echo '<td>'.$valeur['id'].'</td><td>'.$valeur['numcommande'].'</td><td>'.$valeur['typeerreur'].
												'</td><td>'.$valeur['nom'].'</td><td>'.$valeur['prenom'].'</td><td>'.$valeur['telephone'].
                        '</td><td>'.$valeur['date'].'</td><td>
                        <a href="#" onclick="deleteAnomalie('.$valeur['id'].')">Supprimer </a>' ;


                   echo '</tr>';
                     }?>
                </tbody>
            </table>

</div>
