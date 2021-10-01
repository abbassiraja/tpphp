<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $row_length = 5; $column_length = 5;
    for ($row = 1; $row <= $row_length; $row++) {
        for ($column = 1; $column <= $column_length; $column++) {
           // I have used an extra space for pretty formatting. 
            echo "*&nbsp;";
        }
        echo '<br>';
    }
    
    ?>
</body>
</html>