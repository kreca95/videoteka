<?php
    require ('baza.php');
    $id=$_GET["id"];
    $sql="DELETE FROM film WHERE id=".$id;
    $result = $con->query($sql);
    header("Location: filmovi.php");

?>