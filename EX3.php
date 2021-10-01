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
    // setlocale(LC_TIME, 'fr_FR.UTF8');
    // setlocale(LC_TIME, 'fr_FR');
    // setlocale(LC_TIME, 'fr');
    setlocale(LC_TIME, 'fra_fra');
     echo "Nous sommes le";
    echo '<font color="blue" >' . strftime('  %Y/%m/%d ') . '</font>' ;  // 2012/10/11 16:03:04
    echo "et il est";
    echo '<font color="red" >' . strftime('  %H:%M:%S') . '</font>';
    ?>
</body>
</html>