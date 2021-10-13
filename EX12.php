 	
<?php
$array = array( 1, 1, 2, 3, 5, 8, 13 );
foreach( $array as $value )
  echo $value . '<br />';
  $array = array( 'premier' => 'N° 1', 'deuxieme' => 'N° 2', 'troisieme' => 'N° 3');
  foreach( $array as $value ) // on parcourt $array, la valeur de l'item courant est copiée dans $value
  echo $value . '<br />'; // affichage
  $array = array( 'premier' => 'N° 1', 'deuxieme' => 'N° 2', 'troisieme' => 'N° 3');

foreach( $array as $key => $value )
  echo 'Cet élément a pour clé "' . $key . '" et pour valeur "' . $value . '"<br />';


  $array = array( 'fruits' => array( 'pommes', 'tomates', 'abricots' ),
                'animaux' => array( 'chats', 'chiens' ),
                'pays' => array( 'Suisse', 'France', 'Angleterre' ) );

foreach( $array as $key => $value )
{
  echo $key . ': <br />';
 
  foreach( $value as $valeur )
    echo '  ' . $valeur . '<br />';
   
  echo '<br />';
}

$i=0;
while($i<7)

{
    echo $i;
    echo '</br>';
    $i++;
}
echo '<hr>';
$array = array( 1, 1, 2, 3, 5, 8, 13 );

$i = 0;
$max = count( $array );

while( $i < $max )
{
  echo $array[ $i ] . '<br />';
  $i++;
}
?>