<?php
if (!empty($_POST['login']) && !empty($_POST['password'])  && !empty($_POST['password2'])) {

    require_once '../functions/db.php';
    require_once '../functions/utils.php';

    
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password === $password2) {
        session_start();
        register_user($login, $password, $password2);
    }
  }
?>

<form action="?nav=register" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="john.doe@example.Com">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="mot de passe">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Répéter le mot de passe</label>
    <input type="password" name="password2" class="form-control" id="exampleInputPassword1" placeholder="mot de passe">
  </div>
  <button type="submit" class="btn btn-primary">S'inscrire</button>
</form>