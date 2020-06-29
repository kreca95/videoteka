<?php 

    require("baza.php");

    if ($_GET["id"]!='') {
        $sql="DELETE FROM zanr WHERE Id=".$_GET["id"];
        $con->query($sql);
        header("Location: zanrovi.php");
    }
    else{
        echo("greska");
    }
?>