<form action="insertArticle.php" method="POST"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="name">Numero de reference</label>
    <input type="text" class="form-control" placeholder="Ex : LA01" name="num_ref"required>
  </div>
  <div class="form-group">
    <label for="name">Designation</label>
    <input type="text" class="form-control" placeholder="Ex : lampadaire" name="designation"required>
  </div>
  <div class="form-group">
    <label for="name">Prix</label>
    <input type="text" class="form-control" placeholder="Ex : 500" name="prix"required>
  </div>
  <div class="form-group">
    <label for="name">Image</label>
    <input type="file" class="form-control" name="image"required>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
