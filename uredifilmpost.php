<?php
if ($_SESSION["uloga"]!="Admin") {
    header("Location: index.php");
}
require("baza.php");
if (isset($_POST["zanr"]) && isset($_POST["film"]) && isset($_POST["godina"])  && isset($_POST["cijena"]) && isset($_POST["opis"]) && isset($_POST["glumci"])) {

    $values="(".$_POST["godina"].",".$_POST["zanr"].",".$_POST["cijena"].",'".$_POST["opis"]."','".$_POST["film"]."','".$_POST["glumci"]."')";
// echo($values);
$sql="UPDATE film as f set GodinaIzlaska=".$_POST["godina"].",ZanrId=".$_POST["zanr"].",Cijena=".$_POST["cijena"].",Opis='".$_POST["opis"]."',Naziv='".$_POST["film"]."',Glumci='".$_POST["glumci"]."' WHERE f.Id=".$_POST["id"];

$result=$con->query($sql);
echo($sql);
header("Location: filmovi.php");
}
else{
    echo("greska");
}
?>