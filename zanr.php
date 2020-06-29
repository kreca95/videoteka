<?php

    require("baza.php");
    require("nav.php");

?>

<br><br><br>
<div class="container">

<div class="row">
<form action="zanrpost.php" method="post">

    <div class="input-group">
    <label for="sel1">Ime zanra: </label>

        <input type="text" class="form-control" name="zanr">
    </div>
    
    <br>
    <button class="btn btn-primary">Dodaj</button>
    </form>

    </div>

    </div>