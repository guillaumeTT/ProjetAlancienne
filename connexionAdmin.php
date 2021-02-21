<form action="bdd.php" method="post">
    <table style="border : 1px solid black; border-collapse: collapse;">
        <tbody>
            <tr>
                <td> <label for="nameP">Name:</label></td>
                <td> <input type="text" id="nameP" name="nameP" ></td>
            </tr>
            <tr>
                <td> <label for="prixP">Price ht:</label></td>
                <td> <input type="text" id="prixP" name="prixP"  ></td>
            </tr>

            <tr>
                <td><label for="stockA">Stock available:</label></td>
                <td><input type="text" id="stockA" name="stockA"  ></td>
            </tr>
            <tr>
                <td><label for="stockO">Stock ordered:</label></td>
                <td><input type="text" id="stockO" name="stockO"  /></td>
            </tr>
            <tr>
                <td><label for="tva">Tva:</label></td>
                <td><input type="text" id="tva" name="tva"  ></td>
            </tr>
        </tbody>
    </table>
    <input type="submit" for="ajouter" name="ajouter"  >
</form>
