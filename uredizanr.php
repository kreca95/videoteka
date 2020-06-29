<?php
    require("baza.php");
    require("nav.php");

    if ($_GET["Id"]!='') {
        $sql="SELECT * FROM zanr WHERE zanr.Id=".$_GET["Id"];
        $result=$con->query($sql);
        while($row = $result->fetch_assoc()) {
                $ime=$row["Naziv"];
                $id=$row["Id"];
            }
    }
    else{
        echo("greska");
    }
?>
<br><br><br>
<div class="container">
<form action="uredizanrpost.php" method="post">

<div class="form-group">
      <label for="usr">Ime:</label>
      <input name="zanr" type="text" class="form-control" id="ime" value=<?php echo($ime);?>>
    </div>
    <input name="id" type="hidden" value=<?php echo($id) ?>>

<button class="btn btn-info">Spremi</button>
</form>
</div>