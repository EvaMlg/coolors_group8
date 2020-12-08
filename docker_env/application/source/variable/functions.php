<?php

//First, you need to declare the function to make it available. It is stored in memory, not ran.
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
	echo '<hr>';
}

// Function calls during "Runtime" :
say_hello("Maurice");
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");


$name = "eva";
echo ucfirst($name);

date_default_timezone_set('UTC');
echo date("<br>"."Y");
echo date("<br>"."'l jS \of F Y h:i:s A'"."<br>");

function alert()
{
     echo ('<br>'.'Alert ! Alert ! Alert !');
}
alert();
function addition ($a,$b)
{
     $c=$a+$b;
     print ($c);
}
addition (2,10);


function sum($firstname, $secondname){
	if (is_numeric($firstname)){
		if (is_numeric($secondname)){
		$result=$firstname*$secondname;
		print($result);
	} else {
		print ("Error: argument is not a number.");
	}

}
}

sum(10,3);



<?php
$arr = array("blue","red","green","yellow");
print_r(str_replace("red","pink",$arr,$i));
echo "Replacements: $i";
?>

// Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
// Example: "In code we trust!" should return: ICWT).
// Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
// Example: "In code we trust!" should return: ICWT).
// Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".
// Create the opposite function, which replaces "æ" by "ae" in : cæcotrophie, chænichthys, microsphæra, sphærotheca



?>