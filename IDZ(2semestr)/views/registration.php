<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
<div class="parent">
    <div class="block">
        <p class="form-title">Sing up</p>
        <form action="../models/login.php" method="post">
            <p>Email</p>
            <input type="email" name="email-up" id="email">
            <p>Login</p>
            <input type="text" name="login-up" id="login">
            <p>Password</p>
            <input type="password" name="password-up" id="password">
            <input name="up" type="submit" id="ok" value="Sing up">
        </form>
    </div>
</div>
</body>
</html>