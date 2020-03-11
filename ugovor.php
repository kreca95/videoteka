<?php
    require("baza.php");
    session_start();
    if ($_SESSION["uloga"]!="Admin") {
        header("Location: index.php");
    }
    if (isset($_GET["akcija"])&& isset($_GET["id"])) {
        if ($_GET["akcija"]==0) {
            $sql='UPDATE ugovor SET JeLiVraceno=1 WHERE Id='.$_GET["id"];
        }
        else if ($_GET["akcija"]==1){
            $sql='UPDATE ugovor SET JeLiPreuzeto=1 WHERE Id='.$_GET["id"];
        }

        $result = $con->query($sql);
        header("Location: ugovori.php");
    }
    else{
        echo("greska");
    }
?>