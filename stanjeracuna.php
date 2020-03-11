<?php
    require("baza.php");
    require("nav.php");
    if ($_SESSION["uloga"]!="Admin") {
      header("Location: index.php");
  }
    if (isset($_GET["uplata"])) {
        echo(
            '
            <script>
            alert("Uspjesno uplaceno");
            </script>

            '
        );
    }
?>
<br><br>
<div class="container">
  <h2>Uplata novca</h2>
  <form action="uplata.php" method="post">
    <div class="form-group">
      <label for="id">Id korisnika:</label>
      <input type="number" class="form-control"  name="id">
    </div>
    <div class="form-group">
      <label for="">Kolicina novca:</label>
      <input type="number" class="form-control" name="novac" min="1" max="100">
    </div>

    <button type="submit" class="btn btn-info">Uplata</button>
  </form>
</div>