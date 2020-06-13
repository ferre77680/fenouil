<form action="verif.php"method="post" de>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"required>
    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email avec quelqu'un d'autre.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="mdp" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp"required>
  </div>
  <select name="type" class="form-control">
           <option selected>Admin</option>
           <option selected>Client</option>
  </select>
  <br>

  <button type="submit" class="btn btn-primary">Connexion</button>
</form>
