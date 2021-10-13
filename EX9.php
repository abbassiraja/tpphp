
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Calculatrice</h2><br>
        <p>Faites votres calcul</p>
    </div>
    <div class="calcule">
        <form action="#" method="POST">
            <input type="text" name="num1">
            <select name="operator" id="">
                
                <option value="addition">+</option>
                <option value="soustraction">-</option>
                <option value="multiplication">*</option>
                <option value="division">/</option>
            </select>
            <input type="text" name="num2"><br><br>
            <input type="submit"  name="submit" value="valider">
            <input type="reset" value="rénialiser" >
        </form>
        <h3> Réponse de calcul</h3>
        <div style="width: 20%; height: 30px; border-style:solid; ">
            <?php
            if (isset($_POST['submit']))
            {
                
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operator = $_POST['operator'];
            switch($operator)
            {
                case "addition":
                echo $num1+$num2;
                break;
                case "soustraction":
                echo $num1-$num2;
                break;
                case "multiplication":
                echo $num1*$num2;
                break;
                case "division":
                    echo $num1/$num2;
                
                break;
              
            }
        
            }
          
        ?>
        </div>
    </div>
</body>
</html>