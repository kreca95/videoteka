<?php
    require("baza.php");
    if ($_POST["zanr"]!='') {
        $zanr=$_POST["zanr"];
        $sql="INSERT INTO zanr (Naziv) VALUES"."('".$zanr."')";
        $con->query($sql);

        header("Location: zanr.php");
    }
    else{
        echo("greska");
    }

?>