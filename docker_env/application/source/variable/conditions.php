<?php

$room_is_filthy = true;
function cleanup_room(){
    echo " <br>I'm cleaning ! ";
}

if( $room_is_filthy = true){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 1.2 Clean your room Exercise, improved

// Create the array of possible states
$possible_states = array(
0 => 'health hazard', 
1 => 'filthy', 
2 => 'dirty', 
3 => 'clean', 
4 => 'immaculate',);

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 


if( $room_filthiness == $possible_states[0] ){
	echo "<br>Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == $possible_states[1] ){
    echo "<br>Room is filthy : let's clean it up !";
} else if( $room_filthiness == $possible_states[2] ){
    echo "<br>Room is dirty : let's clean it up !";
} else if( $room_filthiness == $possible_states[3] ){
	echo "<br>Yuk, Room is filthy : let's clean it up !";
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise

$now = date("H:i:s");               // 17:16:18

if( $now > "05:00:00" AND $now < "09:00:00" ){
    echo "<br>Good morning!";
}
else if( $now > "09:01:00" AND $now < "12:00:00" ){
    echo "<br>Good day !";
}
else if( $now > "12:01:00" AND $now < "16:00:00" ){
    echo "<br>Good afternoon !";
}
else if( $now > "16:01:00" AND $now < "21:00:00" ){
    echo "<br>Good evening !";
}
else if( $now > "21:01:00" AND $now < "04:59:00" ){
    echo "<br>Good night !";
}

// 3. "Different greetings according to age" Exercise

$age = isset($_GET['age']
	
// Form (incomplete)
?>
<form method="get" action="">
	<label for="age">How old are you ?</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">

    <?php

if( $age > 12 ){
    echo "<br>Hello kiddo!";
}
else if( $age < 12 AND $age > 18 ){
    echo "<br>Hello Teenager !";
}
else if( $age < 12 AND age > 115 ){
    echo "<br>Hello adult !";
}
else {
    echo "<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
