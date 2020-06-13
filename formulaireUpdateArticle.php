
  <form id ="formu" action ="updateArticle.php" method="POST" >
    <div class="form-row">
      <div class="form-group col-md-6">
        <input id="Id"  type="hidden" value="<?php echo $_GET['id'];?>" name="id">
        <label>Numero de Reference</label>
        <input type="text" class="form-control"  placeholder="" name="num_ref" value="<?php echo $_GET['num_ref'];?>">
      </div>
      <div class="form-group col-md-6">
        <label>Designation</label>
        <input type="text" class="form-control"  placeholder="" name="designation" value="<?php echo $_GET['designation'];?>">
      </div>
      <div class="form-group col-md-6">
        <label>Prix</label>
        <input type="text" class="form-control"  placeholder="" name="prix" value="<?php echo $_GET['prix'];?>">
      </div>
      <div class="form-group">
        <label for="name">Image</label>
        <input type="file" class="form-control" name="image"required>
      </div>
     <br>
   <button type="submit" class="btn btn-primary">Modifier</button>
  </form>
