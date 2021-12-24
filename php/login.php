<?php
    $login = filter_var(trim($_POST['log']),FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);
    echo $login;
    
    echo $password;

    $mysql = new mysqli('localhost', 'root', 'root', 'zero');
    
    $user = mysqli_query($mysql, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $result = $user->fetch_assoc();
    if(count($result) == 0) {
        echo "Неверный логин или пароль";
        exit();
    } else {
        echo"Авторизация прошла успешно";
        exit();
    }

    $mysql->close();
?>