<?php
session_start();
if ($_SESSION["uloga"]!="Admin") {
    header("Location: index.php");
}
    require("baza.php");
    if (isset($_POST["id"]) && isset($_POST["novac"]) && $_SESSION["uloga"]=="Admin" ) {
        $sql="UPDATE korisnik set StanjeRacuna=StanjeRacuna+".$_POST["novac"]." WHERE Id=".$_POST["id"];
        echo($sql);
        $result=$con->query($sql);
        header("Location: stanjeracuna.php?uplata=1");
    }
    else{
        echo("greska");
    }
?>