<?php
require("baza.php");
require("nav.php");
?>
<body>
    
<div class="container">
<div class="row ">

        <div class="col-xs-12">

          <div class="jumbotron">
            <h1>Dobrodošli!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            <?php
                $sql="select * from zanr";
                $result = $con->query($sql);
    
                
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo(
            '<a href="#" class="list-group-item">'.$row["Naziv"].'</a>'
        );
        }

    }
            ?>
          </div>
          <div class="row">

          <?php

                $sql="SELECT f.Naziv as Naziv,f.Opis as Opis, f.Glumci as Glumci, z.Naziv as NazivFilma FROM film as f INNER JOIN zanr as z on z.Id=f.ZanrId";
                $result = $con->query($sql);    

                while ($row = $result->fetch_assoc()) {
                  echo(
                        '<div class="col-xs-6 col-lg-4 well">
                        <h2>'.$row["Naziv"].'</h2>
                        <p>'.$row["Opis"].' </p>
                        <h3>Zanr</h3>
                        <p>'.$row["NazivFilma"].'</p>
                        <h3>Glumci:</h3>
                        <p>'.$row["Glumci"].'</p>
                      </div>
                    </div>
                  </div>'
                    );
                  }
            
                
          ?>

      </div>
</div>

</body>
