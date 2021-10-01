
<?php


    if (isset($_POST['submit1'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $resultat = $num1+($num2*2);
      $resultat1 = $resultat/3;

      echo $resultat1;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcule De Moyenne</title>
</head>
<body>

<div class="calcule">

     <form action=""  method="POST" >
       <label for="num1">Note 1</label><br>
       <input type="text" name="num1"><br><br>
       <label for="num2">Note 2</label><br>
       <input type="text" name="num2"><br><br>
       <input type="submit" value="moyenne" name="submit1">

     </form>


</div>

</body>
</html>
