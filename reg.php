<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Регастрация аккаунта </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
<form action="vendor/signup.php" method="post"
<div class="login-form">
    <div class="text">
        Регистрация
    </div>
    <form>
        <div class="field">
            <div class="fas fa-envelope"></div>
            <input type="text" name="username" placeholder="Username">
        </div>
        <div class="field">
            <div class="fas fa-envelope"></div>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div class="field">
            <div class="fas fa-lock"></div>
            <input type="password" name="password" placeholder="Password">
        </div>
        <button type="submit">Зарегистрироваться</button>
        <p style=" margin-top: 10px; font-size: 30px;font-weight: 200;color: #ebebeb;text-shadow: 0px 0px 5px #339933, 0px 0px 10px #339933, 0px 0px 10px #339933,0px 0px 20px #339933;">Уже есть аккаунт!?</p><a style="font-size: 30px;font-weight: 600;color: #fdfdfe;text-shadow: 0px 0px 5px #ebebeb, 0px 0px 10px #ebebeb, 0px 0px 10px #ebebeb,0px 0px 20px #ebebeb;}" href="login.php">Войдите в него!</a>
    </form>
</div>
</body>
</html>