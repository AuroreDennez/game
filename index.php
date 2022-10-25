<?php


include 'Caracters.php';

$result = new Caracters('Magicien', 30);


var_dump( $result->getCurrentLife() );

$result->setCurrentLife(40);

//$result->addPouvoir();

var_dump( $result->addPouvoir()->getCurrentLife() );
//var_dump($result);

echo $message;

$array = [
    'name' => 'magicien', 
    'age'  => 233, 
    'taille2' => '1m40',
    'taille4' => '1m40',
    'taille5' => '1m40',
    'taille6' => '1m40',  
    'taille7' => '1m40',
    'taille8' => '1m40',
    'taille9' => '1m40',
    'taille10' => '1m40',
];


//var_dump($array);
//foreach($array as $key => $value) {
//    echo "la valeur est : $value et la clé est $key";
//   echo '<br>';
//}

foreach($result as $value) {
    echo "la valeur est : $value ";
    echo '<br>';
}


?>
