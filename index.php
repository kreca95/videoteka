<?php
require("baza.php");
require("nav.php");
if (isset($_GET["kupovina"])) {
  echo("
  <script>
  alert('Uspjesno kupljen film')
  </script>
  ");
}


?>
<body>
    
<div class="container">
<div class="row ">

        <div class="col-xs-12">

          <div class="jumbotron">
            <h1>Dobrodošli!</h1>
            <p>Dobrodošli na stranicu naše videoteke.</p>
            <?php
                $sql="select * from zanr";
                $result = $con->query($sql);
    
                
    if ($result->num_rows > 0) {
      echo(
        '<a href="index.php" class="list-group-item">Svi filmovi</a>'
    );
        while($row = $result->fetch_assoc()) {

        echo(
            '<a href="index.php?zanr='.$row["Id"].'" class="list-group-item">'.$row["Naziv"].'</a>'
        );
        }

    }
            ?>
          </div>
          <div class="row">

          <?php
                if (!isset($_GET["zanr"])) {
                  
                
                $sql="SELECT f.Id as Id,f.Naziv as Naziv,f.Opis as Opis, f.Glumci as Glumci, z.Naziv as NazivFilma,f.Cijena as Cijena FROM film as f INNER JOIN zanr as z on z.Id=f.ZanrId";
                $result = $con->query($sql);    
               
            
                }
                else{
                
                  $sql="SELECT f.Id as Id,f.Naziv as Naziv,f.Opis as Opis, f.Glumci as Glumci, z.Naziv as NazivFilma,f.Cijena as Cijena FROM film as f INNER JOIN zanr as z on z.Id=f.ZanrId WHERE z.Id=".$_GET["zanr"];
                  $result = $con->query($sql);    
                }
                $dugme="";
                // $stanje="SELECT StanjeRacuna FROM korisnik WHERE Id=".$_SESSION["ID"];
                while ($row = $result->fetch_assoc()) {
                  if ($row["Cijena"]>$stanje) {
                    $dugme='<p><a class="btn btn-danger" disabled>Nedovoljno novaca</a></p>';
                  }
                  else 
                  {
                      $dugme='<p><a href="kupifilm.php?film='.$row["Id"].'&cijena='.$row["Cijena"].'"  class="btn btn-success">Kupi film</a></p>';
                  }
                  echo(
                        '<div class="col-xs-6 col-lg-4 well">
                        <h2>'.$row["Naziv"].'</h2>
                        <p>'.$row["Opis"].' </p>
                        <h3>Zanr</h3>
                        <p>'.$row["NazivFilma"].'</p>
                        <h3>Glumci:</h3>
                        <p>'.$row["Glumci"].'</p>
                        <p>Cijena: '.$row["Cijena"].'</p>
                        '.$dugme.'
                      </div>
                    </div>
                  </div>'
                    );
                  }
          ?>

      </div>
</div>

</body>
<script>

</script>