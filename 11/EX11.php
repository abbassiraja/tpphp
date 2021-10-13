

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="notes.php" method="POST">
        <div>
            <label for="texte">Nom ou pseudo:</label>
            <input type="text" name="name" id="nom">
        </div>
        <div>
            <label for="mail">adresse email:</label>
                <input type="mail" name="email">
            
        </div>
        <div>
            <label for="texte">Site web (facultatif)</label>
            <input type="text" name="site">
        </div>
        <div>
            <label for="texte">Commentaire:</label>
            <textarea name="note" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" value="envoyer">
            <button type="reset">RÉnialiser</button>
        </div>
    </form>
</body>
</html>