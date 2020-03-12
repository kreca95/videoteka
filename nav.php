  
<?php 
  session_start();
  $stanje=0;
?>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>Videoteka</title>
		    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.php">Home</a></li>
            

            <?php if (isset($_SESSION["email"]) )
            {
              echo('<li><a href="">Prijavljeni ste kao '.$_SESSION["email"].'</a></li>');
              echo('<li><a href="odjava.php">Odjava</a></li>');           
              $sql="SELECT StanjeRacuna FROM korisnik WHERE Id=".$_SESSION["ID"];
              $result=$con->query($sql);
              // echo($sql);
              while($row = $result->fetch_assoc() ) {
                $stanje=$row["StanjeRacuna"];
                echo('<li><a>Stanje racuna: '.$stanje.'</a></li>');
                echo('<li><a>Id racuna: '.$_SESSION["ID"].'</a></li>');
                echo('<li><a href="mojekupnje.php">Moje kupnje</a></li>');

            }
              if ($_SESSION["uloga"]=="Admin") {

                echo('<li><a href="filmovi.php">Filmovi</a></li>');
                echo('<li><a href="zanrovi.php">Zanrovi</a></li>');
                echo('<li><a href="stanjeracuna.php">Uplata na racun</a></li>');
                echo('<li><a href="ugovori.php">Ugovori</a></li>');
              }
            }
            else
            {
              echo('<li><a href="registracija.php">Registracija</a></li>');
              echo('<li><a href="prijava.php">Prijava</a></li>');
              echo('<li><a href="">Prijavljeni ste kao gost</a></li>');
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    