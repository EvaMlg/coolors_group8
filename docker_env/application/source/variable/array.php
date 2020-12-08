
<?php $family = array( 'Éric', 'Anne-Marie', 'Hugo', 'Florence', 'Jules' );
print_r($family); 

$recipe = array('Sushis', "Miso Soup", "Onigri", "Kaarage", "Domburi");
print_r($recipe);

$films = array('Titanic', 'La Belle personne', "Pauline à la plage", "Oslo 31 aout");
print_r($films[2]);

echo '<pre>';
print_r($films);
echo '</pre>';

var_dump($films);

array_push($films, 'Nemo');

$films[] = 'Nemo';

echo '<pre>';
print_r($films);
echo '</pre>';

$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );

echo '<pre>';
print_r($user);
echo '</pre>';

echo $user['lastname'];

$theo = array(
    'firstname' => 'Théodore',
    'age' => 28,
    'favoriteseason' => 'Automn',
    'soccer' => false,
    'favorite movie' => $films,
    'hobbies' => 'chorlespinpin', 'eat', 'eva', "love",
);

$me = array(
    'firstname' => 'Eva',
    'age' => 26,
    'favoriteseason' => 'Spring',
    'soccer' => true,
    'favorite movie' => $films,
    'hobbies' => 'literature', 'music', 'danse', 'love',
    'theo' => $theo,
);


echo '<pre>';
print_r($me);
echo '</pre>';

var_dump(count($me'hobbies'));
var_dump(count($theo'hobbies'));




?>
