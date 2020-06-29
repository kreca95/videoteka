<?php

    require("baza.php");
    require("nav.php");

    $sql="SELECT * FROM zanr";

?>

<div class="container">
  <h2>Filmovi</h2>
  <a href="zanr.php" class="btn btn-info">Dodajte zanr </a>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Naziv</th>
      </tr>
    </thead>
    <tbody>
    <?php    
        $sql = "SELECT * from zanr";
        $result = $con->query($sql);    
        while($row = $result->fetch_assoc()) {
            echo("<tr>"
                .
                "<td>".$row["Id"]."</td>"
                .
                "<td>".$row["Naziv"]."</td>"
                
            );
            echo("<td><a name='izbrisi' href='izbrisizanr.php?id=".$row["Id"]."'> <span>izbrisi</a></span></td>");
            echo("<td><a name='uredi' href='uredizanr.php?Id=".$row["Id"]."'> <span >uredi</a></span></td>");
            echo("</tr>");
    }
    ?>
    </tbody>
</table>