<?php
    require("baza.php");
    require("nav.php");
    $id=$_GET["id"];
    if ($_SESSION["uloga"]!="Admin") {
      header("Location: index.php");
  }
    if (isset($id)) 
    {
        // dohvacanje proizvoda 
        $sql="select f.*,z.Naziv as zanr from film as f INNER JOIN zanr as z on z.Id=f.ZanrId where f.Id=".$id;
        $result = $con->query($sql);

        $ime="";
        $cijena=0;
        while($row = $result->fetch_assoc()) {
            $ime=$row["Naziv"];
            $cijena=$row["Cijena"];
            $glumci=$row["Glumci"];
            $opis=$row["Opis"];
            $zanr=$row["ZanrId"];
            $godina=$row["GodinaIzlaska"];
            $zanrime=$row["zanr"];
            }
        }
    else
    {
        echo("greska");
    }
?>
<br><br>
<div class="container">
  <h2>Uredite film</h2>
  <form action="uredifilmpost.php" method="post">
    <div class="form-group">
      <label for="usr">Ime:</label>
      <input name="film" type="text" class="form-control" id="ime" value=<?php echo($ime);?>>
    </div>
    <div class="form-group">
      <label for="cijena">Cijena:</label>
      <input name="cijena" type="number" class="form-control" id="cijena" value=<?php echo($cijena);?>>
    </div>

    <div class="form-group">
      <label for="godina">Godina izlaska:</label>
      <input name="godina" type="number" class="form-control" id="godina" value=<?php echo($godina);?>>
    </div>

    <div class="form-group">
      <label for="glumci">Glumci:</label>
      <input name="glumci" type="text" class="form-control" id="cijena" value=<?php echo($glumci);?>>
    </div>

    <div class="form-group">
      <label for="opis">Opis:</label>

      <textarea name="opis" class="form-control" id="cijena" >
      <?php echo($opis);?>
      </textarea>
    </div>

    <div class="form-group">
      <label for="glumci">Zanr:</label>

      <div class="input-group">
      <select class="form-control" id="sel1" name='zanr'>
            <option value=<?php echo($zanr) ?> > <?php echo($zanrime) ?> </option>
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
    </div>

    <input name="id" type="hidden" value=<?php echo($id) ?>>
    <button class="btn btn-info">Uredi</button>
  </form>
</div>