<?php
    require("baza.php");

    require("nav.php");
    if ($_SESSION["uloga"]!="Admin") {
        header("Location: index.php");
    }

    $sql='select * from ugovor WHERE JeLiPreuzeto=0';

    $result = $con->query($sql);

?>
<div class="container">
<div class="row ">

<br><br><br>
<table class="table">
<thead>
<tr>
    <th>Id ugovora</th>
    <th>Odobravanje kupnje</th>
    <th>Cijena</th>
</tr>
</thead>
<tbody>
    <?php
                while($row = $result->fetch_assoc()) {
                    $button="";
                    if ($row["JeLiPreuzeto"]==false) {
                        $button='<a href="ugovor.php?akcija=1&id='.$row["Id"].'" class="btn btn-info" value=0 >Odobri</a> ';
                    }

                    echo(
                        '
                        <tr>
                        <td>
                        '.$row["Id"].'
                        </td>
                        <td>
                        '.$button.'
                        </td>
                        <td>
                        '.$row["Suma"].'
                        </td>
                        </tr>
                        '

                    );
                }
    ?>
</tbody>

</table>
</div></div>