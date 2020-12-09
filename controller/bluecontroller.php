<?php


include "db.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$query = 'SELECT * FROM films';
$stmt = $dbh->exec($query);
try{

//$connection = new \PDO($dsn, $username, $password);
//$films = new PDO('mysql:host=127.0.0.1;dbname=films;', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

// On récupère tout le contenu de la table films



// On affiche chaque entrée une à une
while ($datas = $stmt->fetch())
{
?>
    <?php echo $datas['name']; ?>
    <?php echo $datas['director']; ?>
    <?php echo $datas['actors']; ?>
    <?php echo $datas['years']; ?> 
    <?php echo $datas['synopsis']; ?>
    <?php echo $datas['duration']; ?>
    <?php echo $datas['poster']; ?>
    <?php echo $datas['color']; ?>
   </p>
<?php
}
$reponse->closeCursor(); // Termine le traitement de la requête

?>