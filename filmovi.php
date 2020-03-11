<?php
    require("baza.php");
    require("nav.php");
    if ($_SESSION["uloga"]!="Admin") {
      header("Location: index.php");
  }

?>

<div class="container">
  <h2>Filmovi</h2>
  <a href="filmForma.php" class="btn btn-info">Dodajte film </a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Naziv</th>
      </tr>
    </thead>
    <tbody>
    <?php    
        $sql = "SELECT * from film";
        $result = $con->query($sql);    
        while($row = $result->fetch_assoc()) {
            echo("<tr>"
                .
                "<td>".$row["Id"]."</td>"
                .
                "<td>".$row["Naziv"]."</td>"
                
            );
            echo("<td><a name='izbrisi' href='izbrisifilm.php?id=".$row["Id"]."'> <span>izbrisi</a></span></td>");
            echo("<td><a name='uredi' href='uredifilm.php?id=".$row["Id"]."'> <span >uredi</a></span></td>");
            echo("</tr>");
    }
    ?>
    </tbody>
</table>