<form id ="formu" action ="updateClient.php" method="POST" >
 <div class="form-row">
   <div class="form-group col-md-6">
    <input id="Id"  type="hidden" value="<?php echo $_GET['id'];?>" name="id">
   <select name="caract" class="form-control">
            <option selected>Prospect</option>
            <option selected>Client</option>
            <option selected>Client interdit</option>
   </select>
   <br>
 <button type="submit" class="btn btn-primary">Modifier</button>
</form>
