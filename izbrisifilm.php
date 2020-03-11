<?php
    require ('baza.php');
    session_start();
    if ($_SESSION["uloga"]!="Admin") {
        header("Location: index.php");
    }
    $id=$_GET["id"];
    $sql="DELETE FROM film WHERE id=".$id;
    $result = $con->query($sql);
    header("Location: filmovi.php");

?>