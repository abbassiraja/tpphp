<?php
if(isset($_POST['submit']));


echo "Bonjour" . " ". $_POST['nom'] . " " . $_POST['prenom']; 
echo '<br>';

echo "Vous avez" . " "  . $_POST['naissance'] . " " ."ans";
echo '<br>';
echo "Vous etes un " . " "  . $_POST['sexe'] ;
echo '<br>';
echo "Vous etes un" ." ". $_POST['categorie']  ;
echo '<br>';
echo "Vous avez un diplome >" . $_POST['qualification']  ;




?>