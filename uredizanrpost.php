<?php

    require("baza.php");

    if ($_POST["zanr"] !='' && $_POST["id"]!='') {
        $sql="UPDATE zanr set Naziv='".$_POST["zanr"]."' WHERE Id=".$_POST["id"];
        $con->query($sql);
        // echo($sql);
        header("Location: zanrovi.php");
    }
    else {
        echo("greska");
    }

?>