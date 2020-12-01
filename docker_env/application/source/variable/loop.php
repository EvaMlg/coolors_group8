<?php


$plates= array(1, 2, 3, 4, 5);
foreach( $plates as $plate){
	echo 'wash plate';
}

$names= array('John', 'jeanne', 'Joan', 'émile');
foreach ($names as $name){
	echo ucfirst($name);
}

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach($pronouns as $pronoun){
    echo "<br>";
    echo $pronoun;
    if($pronoum == 'He/She' ){
        echo  " codes";
    } else {
        echo " code ";} 
}

$numbers = 1;

while ($numbers <= 120)
{
    echo $numbers.'<br />';
    $numbers ++; 

}



for ($numbers = 1; $numbers <= 120; $numbers ++)
{
    echo $numbers.'<br />';

}

$class = array("soumaya", "bryan", "nery", "cristina","olga", "sebastien", "sebastien", "charlotte", "juliette", "marion", "ibrahim", "abod", "charlene", "celine", "alexia", "saranya", "ahmad", "gianluca", "nicolas", "sam", "yassine", "luis", "gema", "djamal", "sylvain");
foreach ($class as $name){
	echo ucfirst($name).'<br>';
}

$countries = array($france = array('FR' => 'France'), $bretagne = array("BZH" => "Bretagne"), $italie = array('IT' => "Italie"), $iran = array('IR' => "Iran"), $turquie = array('TK' => "turquie"), $belgique = array('BE' => "Belgique"), $canada = array('CA' => 'canada'), $mali = array('MA' => "mali",);

?>

<form method="GET" action="">
  <select name="">
    <option value="" selected>Select a country</option>
    <option> <?php foreach ($countries as $keyCountry => $valuePays) {
        echo "<option>  $valuePays </option> "; 
    }?> </option>
  </select>
</form>


