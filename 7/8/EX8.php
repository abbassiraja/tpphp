<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        
<form  name = "" action="formulaire.php" method="POST" >
   
    
    <fieldset style="border-radius: 10%;border: 3px solid black;">
        <legend ><h2>Civilité</h2></legend>
        <div class="container">
            <div>
                <label for="">Votre nom:</label>
                <input type="text" id="nom" name="nom">
            </div>
            <div>
                <label for="">Votre prenom:</label>
                <input type="text" id="prenom" name="prenom" placeholder="entrez votre prenom">
            </div>
            <div>
                <label for="">Votre année de naissance:</label>
                <input  id="date"  name="naissance" type="number" min="1900" max="2021" >
            </div>
            <div class="page4">
                <label >Votre sexe:</label>
                
                <label for="femme"  >Femme</label>
                <input  type="radio"name="sexe" id="femme">
                <label for="homme" >Homme</label>
                <input   type="radio" name="sexe" id="homme">
            
            </div>
            <div class="page5">
               <label for="">Votre catégorie:</label>
                <select  id="marj" name="categorie" >
                <option >enseignant</option>
                <option >etudiant</option>
                <option >ingénieur</option>
            </select>
            </div>
            <div class="page4">
                <label for="">Quels sont vos qualifications:</label>
                <select multiple  multiple="multiple"  name="qualification" >
                    <option  > Bac +1</option>
                    <option >Bac +2</option>
                    <option > Bac +3</option>
                    <option > Bac +4</option>
                    <option > Bac +5</option>


                </select>
                <div class="page5">
                    <button type="submit">valider</button>
                    <button>Rénialiser</button>
                </div>
        </div>
       
        
            
            
            
 
        
     </fieldset>
 </form>
 
 
</body>
</html>