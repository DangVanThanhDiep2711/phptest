<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo pow(2,9); //lũy thừa
    echo "<br>";
    echo rand(1,10);
    echo "<br>";
    echo sqrt(9);
    echo "<br>";
    echo ceil(4.5);//làm tròn
    echo "<br>";
    echo floor(4.6);
    echo "<br>";
    echo round(4.4);
    echo "<br>";
    $list = [2,6,8,9,7,5,3,1,0,4,10];
    echo max($list);
    echo "<br>";
    echo min($list);
    echo "<br>";
    echo sort($list);
    foreach($list as $item)
    {
        echo $item." ";
    }
    echo "<br>";
    print_r($list);
    $string ="apptech Ho Chi Minh";
    echo strlen($string);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    echo strtolower($string);
    ?>
</body>
</html>