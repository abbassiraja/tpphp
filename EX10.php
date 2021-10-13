<?php
 function table($nbr, $nbr2)
 {
     $table = '<table>';
     for ($a=1; $a <= $nbr; $a++) {
         $table .= '<tr>';
         for ($b=1; $b <= $nbr2 ; $b++) {
             $table .= '<td>'.$a*$b.'</td>';
         }
         $table .= '</tr>';
     }
     $table .= '</table>';
     return $table;
 }
  echo '<p style="color:blue;font-size:1.25em;">'."Table de multiplication".'</p>';
  echo "</br>";
  echo "table de multiplication de 1 à 10";
  echo "</br>";
 echo table(10, 10);

?>