<?php
require("baza.php");
require("nav.php");
?>
<body>
    
<div class="container">
<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Dobrodošli!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
          </div>
          <div class="row">

          <?php
                $sql="SELECT f.Naziv as Naziv,f.Opis as Opis, f.Glumci as Glumci, z.Naziv as NazivFilma, f.Link as Link FROM film as f INNER JOIN zanr as z on z.Id=f.ZanrId";
                $result = $con->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo(
                        '<div class="col-xs-6 col-lg-4 well">
                        <h2>'.$row["Naziv"].'</h2>
                        <p>'.$row["Opis"].' </p>
                        <h3>Zanr</h3>
                        <p>'.$row["NazivFilma"].'</p>
                        <h3>Glumci:</h3>
                        <p>'.$row["Glumci"].'</p>
                        <p><a class="btn btn-default" href="'.$row["Link"].'" role="button" target="_blank">Pogledajte film »</a></p>
                      </div>
                    </div>
                  </div>'
                    );
                    }
            
                }     
          ?>


        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <br><br><br>       
            
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
        </div>
      </div>
</div>

</body>
