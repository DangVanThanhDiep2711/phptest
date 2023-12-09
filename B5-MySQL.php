<?php
$conn = mysqli_connect('localhost', 'root', '');
if($conn){
    echo "<br>Connect success!";
}else{
    die("Database connect faild");
}
?>