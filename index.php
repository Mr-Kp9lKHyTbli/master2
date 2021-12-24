<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h1>Форма регистрации</h1>
        <form action="php/check.php" method="post">
            <input type="text" class="form-control" name="log" id="log" placeholder="Введите логин"><br>
            <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
            <input type="text" class="form-control" name="name" id="name" placeholder="Введите Имя"><br>
            <input type="text" class="form-control" name="surn" id="surn" placeholder="Введите Фамилию"><br>
            <input type="text" class="form-control" name="patron" id="patron" placeholder="Введите Отчество"><br>
            <label>Дата рождения</label>
            <input type="date" class="form-control" name="birth" id="birth" placeholder="Введите день рождения"><br>
            <input type="submit" class="btn btn-success">Зарегистрироваться</input>
        </form>
        <h1>Уже зарегистрированы?</h1>
        <a class="btn btn-success" href="login.php">Авторизоваться</a>
    </div>
</body>
</html>