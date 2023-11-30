<?php
        $name="TranQuocTruong";
        $value= 100;
        $exporation = time() + (60*60*24/7);
        setcookie($name,$value,$exporation);
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['Truong'])){
            $someOne = $_COOKIE['Truong'];
            echo $someOne;
        }else{
            echo $someOne='';
        }
    ?>
</body>
</html>