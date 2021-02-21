<form action="connexionCli.php" method="post" >
    <?php
        if (!session_id()) {
            session_start();
            session_regenerate_id(true);
        }

        $db   = "alancienne"; 
        $host = "localhost";
        $user = "root"; 
        $pass = "root";
       
        $db = new mysqli($host,$user,$pass,$db) or die("unable to connect");
        $query  = "select * from produit";
        $result = mysqli_query($db, $query) or die("bad query");
    ?>

    <table>
        <tbody>
            <tr><td>Produit</td><td>Prix</td><td>Quantité</td></tr>
    <?
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$row['nomP']}</td>";
            echo "<td>".total_ttc($row['prixHt'], $row['tva'])." €</td>";
            echo "<td><input type=\"number\" value=\"0\" size=\"3\" min=\"0\" max=\"".$row['stockMaxP']."\"></td>";
            echo "</tr>";
        }
    ?>
            <tr><td>TOTAL</td><td>Prix</td><td>Quantité</td></tr>
        </tbody>
    </table>

    <input type="submit" for="commander" name="commander" value="Commander" />

</form>

<?php
    function total_ttc($produit_ht, $taux_tva){
        if($taux_tva == 20){
            $res = $produit_ht * (20/100);
           return number_format($produit_ht + $res, 2, ',', '');
        }
        else if($taux_tva == 5.5){
            $res = $produit_ht * (5.5/100);
            return number_format($produit_ht + $res, 2, ',', '');
        }
        else{
            echo "Taux impossible";
        }
    }

    session_unset();
    session_destroy();
?>
