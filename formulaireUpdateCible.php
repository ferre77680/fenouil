<?php
session_start();
if(!empty($_SESSION['Prospection']) || !empty($_SESSION['Directeur Strategique'])) {?>
  <form id ="formu" action ="updateCible.php" method="POST" >
    <div class="form-row">
      <div class="form-group col-md-6">
        <input id="Id"  type="hidden" value="<?php echo $_GET['id'];?>" name="id">
        <label>Age</label>
        <input type="text" class="form-control"  placeholder="" name="age" value="<?php echo $_GET['age'];?>">
      </div>
      <div class="form-group col-md-6">
        <label>Departement</label>
        <input type="text" class="form-control"  placeholder="" name="departement" value="<?php echo $_GET['departement'];?>">
      </div>
      <div class="form-group col-md-6">
        <label>type Individu</label>
        <input type="text" class="form-control"  placeholder="" name="typeindividu" value="<?php echo $_GET['typeindividu'];?>">
      </div>
      <div class="form-group col-md-6">
        <label>type Pub</label>
        <input type="text" class="form-control"  placeholder="" name="typepub" value="<?php echo $_GET['typepub'];?>">
      </div>
      <?php if(!empty($_SESSION['Directeur Strategique'])) {?>
      <div class="form-group col-md-6">
        <label>Valide</label>
        <input type="text" class="form-control"  placeholder="" name="valide">
      </div>
    <?php } ?>
     <br>
   <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
   <?php } ?>
