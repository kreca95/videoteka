<?php
    require ('baza.php');
    require('nav.php');
?>


<div class="container">
<br><br>
<form class="" action="registracijaPost.php" method="post">
  <h2 class="">Registracija</h2>

  <label for="mail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>

  <br>

  <label for="inputPassword" class="sr-only">Sifra</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="sifra" name="sifra" required>
<br>
    <label for="inputIme" class="sr-only">Ime</label>
    <input type="text" id="inputIme" class="form-control" placeholder="Ime" name="ime" required>
    <br>

    <label for="inputPrezime" class="sr-only">Prezime</label>
    <input type="text" id="inputPrezime" class="form-control" placeholder="Prezime" name="prezime" required>
    <br>
  <button class="btn btn-lg btn-info btn-block" type="submit">Registrirajte se</button>

</form>

</div>
