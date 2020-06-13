<form action="InsertClient.php" method="POST">
  <div class="form-group">
    <label for="name">Nom</label>
    <input type="text" class="form-control" placeholder="nom" name="nom"required>
  </div>
  <div class="form-group">
    <label for="name">Prenom</label>
    <input type="text" class="form-control" placeholder="prenom" name="prenom"required>
  </div>
  <div class="form-group">
    <label for="name">Date de naissance</label>
    <input type="date" class="form-control" placeholder="DD/MM/YYYY" name="dateN"required>
  </div>
  <div class="form-group">
    <label for="name">Catégorie socio-professionnel</label>
    <input type="text" class="form-control" name="socio"required>
  </div>
  <div class="form-group">
    <label for="name">numéro de rue</label>
    <input type="text" class="form-control" placeholder="Ex : 6" name="num"required>
  </div>
  <div class="form-group">
    <label for="name">ville</label>
    <input type="text" class="form-control" placeholder="Ex : Paris" name="ville"required>
  </div>
  <div class="form-group">
    <label for="name">code postal</label>
    <input type="text" class="form-control" placeholder="Ex : 77680" name="postal"required>
  </div>
  <div class="form-group">
    <label for="name">numéro de téléphone</label>
    <input type="text" class="form-control" name="num_tel"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Confirm Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email confirmation" name="emailC"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp"required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password confirmation" name="mdpC"required>
  </div>

  <button type="submit" class="btn btn-primary">inscription</button>
</form>
