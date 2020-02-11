<?php
    require("baza.php");
    require("nav.php");
?>

<br><br>
<div class="container">
<form class="" action="prijavaPost.php" method="post">
  <h2 class="">Prijavite se</h2>

  <label for="mail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>

  <br>

  <label for="inputPassword" class="sr-only">Sifra</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Sifra" name="sifra" required>
<br>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Prijavite se</button>
  <a href="registracija.php" class="btn btn-lg btn-info btn-block" type="submit">Registrirajte se</a>

</form>
</div>