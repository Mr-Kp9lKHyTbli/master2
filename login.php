<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h1>Авторизация</h1>
        <form action="php/login.php" method="post">
            <input type="text" class="form-control" name="log" id="log" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <input type="submit" class="btn btn-success">Войти</input><br>
        </form>
        <h1>Еще не зарегистрированы?</h1>
        <form action="index1.php">
        <a class="btn btn-success" href="index.php">Зарегистрироваться</a>
        </form>
    </div>
</body>
</html>