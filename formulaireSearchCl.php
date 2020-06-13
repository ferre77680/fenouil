<form action="SearchAnomalie.php" method="POST">
<label for="inputState">Client</label>
<select name="client"  class="form-control">
            <?php include("commande.php");
               foreach($tableauCommande as $cle=>$valeur) {
           echo '<option value="'.$valeur['id'].'">'.$valeur['mail'].'</option>';
    }?>
  </select>
  <br>
  <button type="submit" class="btn btn-primary">Search</button>
