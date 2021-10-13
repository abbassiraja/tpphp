<?php

$notes_apprenants = ["mohamed" => "16" , "ahmed"=>"14","rafikha"=>"13","aicha"=>"15","samir"=>"13",
"samar"=>"13","rafikh"=>"10","samiha"=>"9","fourat"=>"7","sami"=>"7","abir"=>"14"];
echo "Avant le triage-<br>";
foreach($notes_apprenants as $apprenant=>$note){
    echo $apprenant. "a eu" .$note."<br>";
}
echo "Après le triage(de plus petit au plus grand)-<br>";
asort($notes_apprenants);
foreach($notes_apprenants as $apprenant=>$note){
    echo $apprenant."à eu".$note."<br>";
}
  echo "Après le triage (le plus grand au plus petit)-<br>";
  arsort($notes_apprenants);
  foreach($notes_apprenants as $apprenant=>$note){
      echo $apprenant."a eu".$note."<br>";
  }






?>