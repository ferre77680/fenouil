<form action="InsertCommandeC.php" method="POST">
  <div class="form-group">
    <label for="name">Quantite</label>
    <input type="text" class="form-control" name="quantite"required>
  </div>
  <div class="form-group">
    <label for="name">Numero du cheque</label>
    <input type="text" class="form-control" placeholder="Ex : 2424242424242424" name="infosmoyen1"required>
  </div>
  <div class="form-group">
    <label for="name">Nom de la banque</label>
    <input type="text" class="form-control" placeholder="Ex : CIC" name="infosmoyen2"required>
  </div>
  <div class="form-group">
    <label for="name">Montant de la commande</label>
    <input type="text" class="form-control" placeholder="Ex : 500" name="montantglobal"required>
  </div>
  <div class="form-group">
    <label for="name">Montant Payer</label>
    <input type="text" class="form-control" placeholder="Ex : 500" name="montantrentre"required>
  </div>
  <select name="client"  class="form-control">
           <option selected>Choisir...</option>
           <?php include("commande.php");
                 foreach($tableauCommande as $cle=>$valeur) {
             echo '<option value="'.$valeur['id'].'">'.$valeur['mail'].'</option>';

      }?>
      </select>
      <br>
<button type="submit" class="btn btn-primary">Ajouter</button>
</form>
