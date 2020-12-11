<?php


include "../model/db.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = 'SELECT * FROM films';
// execute sur la DB le query select from film  // statement & database handler
$stmt = $dbh->query($query);
try{

//$connection = new \PDO($dsn, $username, $password);
//$films = new PDO('mysql:host=127.0.0.1;dbname=films;', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// On récupère tout le contenu de la table films

// On affiche chaque entrée une à une
// while ($datas = $stmt->fetch())
// {
//     echo $datas['name']; 
//     echo $datas['director']; 
//     echo $datas['actors']; 
//     echo $datas['years']; 
//     echo $datas['synopsis'];
//     echo $datas['duration'];
//     echo $datas['poster']; 
//     echo $datas['color']; 
// }

// // On créé une requête query pour sélectionner seulement les films bleus 
// $query = "SELECT color, name FROM films WHERE color='blue'";
// // execution de la requête sur la DB
// $stmt = $dbh->query($query);

// while($result = $stmt->fetch())
// {
//     echo $result['name'];  
// }  

// // On créé une requête query pour sélectionner seulement les films bleus 
// $query = "SELECT color, name FROM films WHERE color='yellow'";
// // execution de la requête sur la DB
// $stmt = $dbh->query($query);

// while($result = $stmt->fetch())
// {
//     echo $result['name'];  
// }    