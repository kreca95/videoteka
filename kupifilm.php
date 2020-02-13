<?php
    require("baza.php");
    session_start();
    if (isset($_SESSION["ID"]) && isset($_GET["film"]) && isset($_GET["cijena"]) ) {
        $values="(".$_SESSION["ID"].",".$_GET["film"].",".$_GET["cijena"].")";

        $sql="INSERT INTO ugovor (KorisnikId,FilmId,Suma) VALUES".$values;
        $result=$con->query($sql);
        if($result>0)
        {
            $sql="UPDATE korisnik as k set k.StanjeRacuna=k.StanjeRacuna-".$_GET["cijena"]." WHERE k.Id=".$_SESSION["ID"];
            $con->query($sql);
        }
        header("Location: index.php?kupovina=1");
        // echo($sql);
        // echo($result);
    }
    else{
        echo("greska");
    }

?>