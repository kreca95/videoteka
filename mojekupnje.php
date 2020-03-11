<?php

    require("baza.php");
    require("nav.php");
    $sql="SELECT u.Id as Id, u.Suma as suma, f.Naziv FROM ugovor as u INNER JOIN film as f on f.Id=u.FilmId INNER JOIN korisnik as k on k.Id=u.KorisnikId WHERE u.KorisnikId=".$_SESSION["ID"];
    $result=$con->query($sql);
    while ($row = $result->fetch_assoc()) {
            echo($row["Id"]);
        }
?>

<br><br><br>
<div class="container">

<table class="table">
        <thead>
            <th>
                Id
            </th>
            <th>    
                Suma
            </th>
            <th>
                Film
            </th>
        </thead>

        <tbody>
        <?php
            $result=$con->query($sql);

                while ($row = $result->fetch_assoc()) {
                    echo
                    (
                        '<tr>'
                        .'<td>'.$row["Id"].'</td>'
                        .'<td>'. $row["suma"]. '</td>'
                        .'<td>'. $row["Naziv"].'</td>'
                        .'</tr>'
                    );
                }
        ?>
        </tbody>
</table>

</div>