<?php
    if(isset($_POST['submit']))
    {
        $login = array('hung','an','binh','thao');
        $minimum=5;
        $maximum=10;

        $username = $_POST['username'];
        $password = $_POST['password'];
        if (strlen($username) < $minimum){
            echo "user has to be longer than five ";
        }
        if (strlen($username) > $maximum){
            echo "user can't to be longer than ten";
        }
        if(!in_array($username, $login)){
            echo "sorry you are not allowed";
        }else{
            echo "wellcome ". $username;
        }
    }
    $username='admin';
    $password='123456789';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="B3_get.php" method="get">
        <input type="text" name="username" placeholder="Enter your name"><p>
        <input type="password" name="password" placeholder="Enter your password"><p>
        <input type="submit" name="submit" value="login"><p>
    </form>
    <a href="B3_Get.php?username= <?=$username;?>&password=<?=$password;?>">click me</a>
</body>
</html>