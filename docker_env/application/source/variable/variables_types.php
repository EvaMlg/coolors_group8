<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php $name = 'Eva' ?>
    <?php $age = '26' ?>
    <?php $color = 'blue' ?>
    <?php $family = array(
  0 => 'Anne-Marie', 
  1 => 'Éric', 
  2 => 'Hugo', 
  3 => 'Jules', 
  4 => 'Florence', 
  5 =>'Jeannie',
  6 => 'Marcel', 
  7 => 'Violette', 
  8 => 'Nicole', ); ?>
  <?php $im_i_angry = false; ?>

    <p>Hi my name is <?php echo $name; ?>!</p>
    <p>I am <?php echo $age; ?> years old !</p>
    <p>My eyes are <?php echo $color; ?>.</p>
    <p>The person of my family are <?php print_r ($family); ?>.</p>
    <p>The first person in my family is <?php echo $family[0]; ?>.</p>
    <p>The second person in my family is <?php echo $family[1]; ?> and is <?php 
    if ($im_i_hungry == true){
        echo "hungry";
    } else {
        echo "not hungry";} ?>
    </p>

    <?php
    if ( $age <= 12 AND $language == "English" ) { 
	echo "Hello kiddo!";    
    } else {
	echo "Good day stranger !";
    }
    ?>




    <?php

if (isset($_GET['age'])){
    if (($_GET['age'] <= 12 ) AND ($_GET['gender'] === 'female')){
        echo "Hello kidaaaaaa !";
    } else if (($_GET['age'] <= 12 ) AND ($_GET['gender'] === 'male')) {
        echo "Hello kidoooo !";
    } else if (($_GET['age'] <= 12 ) AND ($_GET['gender'] === 'other')) {
    echo "Hello kiduuuuuu !";
    } else if (($_GET['age'] > 12) AND ($_GET['age'] < 18 ) AND ($_GET['gender'] === 'other')){
         echo "Hello Teeenu !";
    } else if (($_GET['age'] > 18) AND ($_GET['age'] < 115 )){
        echo "Hello Adult !";
    } else if ($_GET['age'] > 115){
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    } else if (($_GET['age'] > 12) AND ($_GET['age'] < 18 )){
    echo "Hello Teenager !";
    } else if (($_GET['age'] > 18) AND ($_GET['age'] < 115 )){
   echo "Hello Adult !";
    } else if ($_GET['age'] > 115){
   echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
}

?>
<form method="get" action="">
	<label for="age">How old are you ?</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
    <input type="radio" id="gender" name="gender" value="male" checked>
    <label for="male">Male</label>
    <input type="radio" id="gender" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="gender" name="gender" value="other">
    <label for="other">Other</label>
</form>


The Girl Soccer Team

if (isset($_GET['age'])){
    if (($_GET['age'] <= 12 ) AND ($_GET['gender'] === 'female')){
        echo "Hello kidaaaaaa !";
    } else if (($_GET['age'] <= 12 ) AND ($_GET['gender'] === 'male')) {
        echo "Hello kidoooo !";
    } else if (($_GET['age'] <= 12 ) AND ($_GET['gender'] === 'other')) {
    echo "Hello kiduuuuuu !";
    } else if (($_GET['age'] > 12) AND ($_GET['age'] < 18 ) AND ($_GET['gender'] === 'other')){
         echo "Hello Teeenu !";
    } else if (($_GET['age'] > 18) AND ($_GET['age'] < 115 )){
        echo "Hello Adult !";
    } else if ($_GET['age'] > 115){
        echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
    } else if (($_GET['age'] > 12) AND ($_GET['age'] < 18 )){
    echo "Hello Teenager !";
    } else if (($_GET['age'] > 18) AND ($_GET['age'] < 115 )){
   echo "Hello Adult !";
    } else if ($_GET['age'] > 115){
   echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
}


<form method="get" action="">
    <label for="name">What's your name ?</label>
	<input type="" name="name">
	<label for="age">How old are you ?</label>
	<input type="" name="age">
    <input type="radio" id="gender" name="gender" value="male" checked>
    <label for="male">Male</label>
    <input type="radio" id="gender" name="gender" value="female">
    <label for="female">Female</label>
    <input type="radio" id="gender" name="gender" value="other">
    <label for="other">Other</label>
    <input type="submit" name="submit" value="Validate">

</form>



</body>
</html>