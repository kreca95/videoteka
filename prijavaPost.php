<?php
require("baza.php");

session_start();
if(isset($_SESSION["email"]))
{
    header('Location: index.php');
}

if(isset($_POST["email"]) && isset($_POST["sifra"]))
    {
        $email=strtolower($_POST["email"]);
        $sifra=$_POST["sifra"];

        $id="select u.Id as ID,ul.Naziv as uloga from korisnik as u INNER JOIN uloga as ul on ul.Id=u.UlogaId where u.Email='".$email."'";

        $resultId=$con->query($id);
        // $rowId = $resultId->fetch_assoc();
        while($row = $resultId->fetch_assoc() ) {
            $id=$row["ID"];
            $rowId=$row["uloga"];
            echo($rowId);
        }
        
        $_SESSION["ID"]=$id;

        $_SESSION["uloga"]=$rowId;

        $sql = "select count(*) as brojac from korisnik where Email='".$email."' and Sifra='".$sifra."'";
        $result = $con->query($sql);
        // $row = $result->fetch_assoc();       
        while($row = $result->fetch_assoc() ) {
            $brojac = $row['brojac'];
        }
        
        if($brojac > 0){
            $_SESSION['email'] = $email;
            // ako postoji korisnik sa unesenim podacima, dodjeli mu se sesija
            echo($_SESSION["email"]);
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }
    }
    else
    {
        echo("not ok");
    }

?>