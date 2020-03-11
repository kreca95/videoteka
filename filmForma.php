<?php
    require("baza.php");
    require("nav.php");
    if ($_SESSION["uloga"]!="Admin") {
        header("Location: index.php");
    }
?>
<br><br>
<br>
<br>
<br>
<div class="container">

<div class="row">
<form action="dodajfilm.php" method="post">
    <div class="input-group">
    <label for="sel1">Izaberite zanr: </label>
      <select class="form-control" id="sel1" name='zanr'>

            <?php
                $sql="SELECT * FROM zanr";
                $result=$con->query($sql);
                
                while($row = $result->fetch_assoc()) {
                    echo(
                        // 
                        '<option value='.$row["Id"].'>'.$row["Naziv"].'</option>'
                    );
                }
            ?>
        </select>
        </div>
    <br>
    <div class="input-group">
    <label for="">Ime filma: </label>

        <input type="text" class="form-control" name="film">
    </div>
    <br>
    <div class="input-group">
    <label for="sel1">Godina izlaska: </label>

        <input type="number" class="form-control" name="godina">
    </div>
    <div class="input-group">
    <label for="sel1">Cijena filma: </label>

        <input type="number" class="form-control" name="cijena">
    </div>

    <div class="form-group">
  <label for="comment">Radnja filma:</label>
  <textarea class="form-control" rows="5" name="opis"></textarea>
</div>
<div class="input-group">
    <label for="sel1"> Glumci (odvojiti zarezom): </label>

        <input type="text" class="form-control" name="glumci">
    </div>
    <br>
    <button class="btn btn-primary">Dodaj</button>
    </form>
<!-- row -->
  </div>

  </div>

</div>
</div>
<?php require("footer.php");?>