<?php
    require("baza.php");
        // provjera jesu li uneseni email i sifra
    if(isset($_POST["email"]) && isset($_POST["sifra"]))
        {
                $email=strtolower($_POST["email"]);
                $sifra=$_POST["sifra"];
                $ime=$_POST["ime"];
                $prezime=$_POST["prezime"];
                // ako su uneseni, korisnik se ubaca u bazu
                $values="('".$ime."','".$prezime."','".$email."','".$sifra."',1)";
                $sql="INSERT INTO korisnik (Ime,Prezime,Email,Sifra,UlogaId) VALUES ".$values;
                $result = $con->query($sql);
                echo($sql);
                echo($result);
                header("Location: index.php");
        }
            else
            {
                echo("not ok");
            }
?>