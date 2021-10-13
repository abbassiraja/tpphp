<?php
if(isset($_POST['submit']));


echo "Bonjour" . " ". $_POST['nom'] . " " . $_POST['prenom']; 
echo '<br>';
if(isset($_POST['submit']))  ;
$num1=2021;
$num2=$_POST['naissance'];
$resultat=$num1-$num2;


echo "Vous avez" . " "  . $resultat . " " ."ans";
echo '<br>';
echo "Vous etes un " . " "  . $_POST['sexe'] ;
echo '<br>';
echo "Vous etes un" ." ". $_POST['categorie']  ;
echo '<br>';
echo "Vous avez un diplome >" . $_POST['qualification']  ;




?>