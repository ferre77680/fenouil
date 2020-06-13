<form id ="formu" action ="insertCible.php" method="POST" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label >Age </label>
      <input type="text" class="form-control"  placeholder="Ex : 26" name="Age">
    </div>
    <div class="form-group col-md-6">
      <label >Departement</label>
      <input type="text" class="form-control"  placeholder="Ex : Seine-et-Marne" name="Departement">
    </div>
       <div class="form-group col-md-4">
      <label for="inputState">Type Individu</label>
      <select name="typeIndividu"  class="form-control">
               <option selected>Choisir...</option>
               <option selected>Client</option>
               <option selected>Non client</option>

      </select>
    </div>
    <div class="form-group col-md-4">
   <label for="inputState">Type Pub</label>
   <select name="typePub"  class="form-control">
            <option selected>Choisir...</option>
            <option selected>Courrier</option>
            <option selected>Internet</option>

   </select>
 </div>

    <br>

  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
