<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for loop</title>
</head>
<body>
    <?php
    $a =array(1,2.4,9,3);
    $arr = count($a);
        for($i=0 ;$i < $arr; $i++){
            echo $a[$i]." ";
        } 
        echo "<br>";
        foreach($a as $aItem){
            echo $aItem." ";
        }
        echo "<br>";
    $b = array("first name"=>"Join","last name"=>" Mary");
        foreach($b as $ar){
            echo $ar."";
        }
        ?>
</body>
</html> 