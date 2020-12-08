<?php
// créé un objet qui contient les données de la DB en se connectant à Mysql
try{
$films = new PDO('mysql:host=localhost;dbname=films;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
// On récupère tout le contenu de la table films
$reponse = $bdd->query('SELECT * FROM films');

// On affiche chaque entrée une à une
while ($datas = $reponse->fetch())
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