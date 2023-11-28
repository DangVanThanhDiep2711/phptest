<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=10;
        if($a==0){
           echo"true";
        }
        elseif($a>0){
            echo"right";
        }else{
            echo"left";
        }
        // if(!($a)){
        //     echo "false";
        // }
        echo "<br>";
        echo $a<9?"hello":"goodbye";
    ?>
</body>
</html>