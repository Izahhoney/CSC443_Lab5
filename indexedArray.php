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
    $month = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

    foreach($month as $key => $value){
    echo "The value of key $key is: $value<br>";
    echo "<br>";
    }
    foreach ($month as $value){
        echo "value: $value<BR>";
    }
    ?>
    </body>
</html>