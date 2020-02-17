<?php
    require("baza.php");

    require("nav.php");


    $sql='select * from ugovor WHERE JeLiVraceno=0';

    $result = $con->query($sql);

?>
<div class="container">
<div class="row ">

<br><br><br>
<table class="table">
<thead>
<tr>
    <th>Id ugovora</th>
    <th>Iznajmi</th>
    <th>Cijena</th>
</tr>
</thead>
<tbody>
    <?php
                while($row = $result->fetch_assoc()) {
                    $button="";

                    if ($row["JeLiPreuzeto"]==true) {
                        $button='<a href="ugovor.php?akcija=0&id='.$row["Id"].'" class="btn btn-info" value=0 >Vrati</a> ';
                    }
                    else if($row["JeLiVraceno"]==false){
                        $button='<a href="ugovor.php?akcija=1&id='.$row["Id"].'" class="btn btn-primary" value=1 >Iznajmi</a>';
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