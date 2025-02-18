<?php

// try 
// {
//     $dataSource = 'mysql:host=localhost;dbname=gaming_tournament;charset=utf8'; //db source
//     $options = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,]; // Permet à PDO de lever des exceptions en cas d'erreur SQL
        
//     $database   = new PDO($dataSource, 'adminGamingTournament', 'gmgtnmt76620', $options); // connexion by PDO

// } catch (PDOException $ex) 
// {
//     // message d'erreur
//     printf('La connexion à la base de données à échouer avec le code %s', $ex->getCode());
//     // arrêter l'exécution du script
//     die();
// }


function getConnexion() {
    try {
        $dsn = "mysql:host=localhost;dbname=gaming_tournament;charset=utf8";
        $user = "adminGamingTournament";
        $pass = "gmgtnmt76620";
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        die();
    }
}
getConnexion();



// $database = getConnexion();

// $results = $database->query('SELECT * FROM tnmt_users');

// var_dump($results->fetchAll(PDO::FETCH_ASSOC));

// while ($row = $results->fetch()) {
//     echo $row['firstname'].'<br>';
// }