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

    for ($i = 2; $i <= 1000; $i++) {
        $isPrime = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $i . " ";
        }
    }
    //verschiedene Schreibweisen
    echo "select * from table where name = 'test' and status = 1";
    $name = "test";
    echo "select * from table where name = '$name' and status = 1";
    echo "select * from table where name = '.$name.' and status = 1";

    //array erstellen
    $test = array(1,2,3,4,5,6,7,8);
    echo "<pre>";
    print_r($test);
    echo "</pre>";

    //array in json umwandeln
    echo json_encode($test);

    //funktion erstellen
    function test() {
        echo "test";
    }
?>

</body>
</html>