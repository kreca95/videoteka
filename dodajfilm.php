<?php
require("baza.php");
session_start();

if ($_SESSION["uloga"]!="Admin") {
    header("Location: index.php");
}
if ($_POST["zanr"]!='' && $_POST["film"]!='' && isset($_POST["godina"])  && isset($_POST["cijena"]) && $_POST["opis"]!='' && $_POST["glumci"]!='') {
    $values="(".$_POST["godina"].",".$_POST["zanr"].",".$_POST["cijena"].",'".$_POST["opis"]."','".$_POST["film"]."','".$_POST["glumci"]."')";
    // echo($values);
    $sql="INSERT INTO film (GodinaIzlaska,ZanrId,Cijena,Opis,Naziv,Glumci) VALUES ".$values;

    $result=$con->query($sql);
    // echo($sql);
    header("Location: filmovi.php");
}
else{
    echo("greska");
}
?>