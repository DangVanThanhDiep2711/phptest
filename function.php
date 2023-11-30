<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
        function add1 ($a, $b){
            return $a + $b;
        }

        echo add1(5,10);
        echo "<br>";
        
        function prime($n){
            $count=0;
            for($i=1;$i<=$n;$i++) {
                if($n % $i == 0)
                {
                    $count++;
                }
            }
            return $count==2;
        }

        
        echo prime(5);
        echo "<br>";


        function prime1($n){
            if($n<2) return false;
            for ($i=2;$i<$n;$i++) 
            {
                if($n%$i==0)
                {
                    return false;
                }
            }

            return true;
        }
        if(prime1(5)){
            echo "true";
        }else
            echo "false";
        
        echo "<br>";



        function tang($a){
            global $count;
            $count = 0;
            if($a>0)
            {
                $count++;
            }
            echo $count." ";
        }
        define("number",1000);
        echo number;
        echo tang(5);
        echo $count;

    ?>
</body>
</html>