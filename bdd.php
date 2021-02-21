<?php

    $dbname = "alancienne"; 
    $host   = "localhost";
    $user   = "root"; 
    $pwd    = "root";   
    $port   = 3306;

    $name   = $_POST["nameP"];
    $prix   = $_POST["prixP"];
    $stockA = $_POST["stockA"];
    $stockO = $_POST["stockO"];
    $tva    = $_POST["tva"];

    //chaine de connexion
    $connStr = "mysql:host={$host}; port={$port}; dbname={$dbname};"; 

    try {
        // Connexion à la base de données
        $pdo = new PDO($connStr, $user, $pwd);

        $pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
        $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);

        $requete= "insert into produit(nomP,prixHt,stockMaxP,StockCommandeP,tva) values('{$name}',{$prix}, {$stockA},{$stockO},{$tva})";
        $res = $pdo->exec($requete);

        // Pour les tests
        if ($res) {
            echo "Article ajouté à la base de données <br/>\n";
        }
        else {
            echo "2=> erreur : ça ne marche pas ! <br>\n";
        }
    }
    catch (PDOException $e) {
         echo "ERREUR D'ACCES A LA BDD :".$e->getMessage();    
    }
    // Déconnexion
    $pdo = null;

?>

<a href="connexion.php">Retour au formulaire</a>

