<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $number = 3;
        switch($number){
            case 1:
                echo "Number one";
                break;
            case 2:
                echo "Number two";
                break;
            case 3:
                echo "Number three";
                break;    
            default: 
                echo "unkown";
                break;
        }
    ?>
</body>
</html>