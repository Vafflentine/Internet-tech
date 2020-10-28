
<?php
session_start();
    if(isset($_POST['login'])){ // Заносим введеный пользователем логин, если пустой, то удаляем переменную 
        $login = $_POST['login'];
        if($login == ''){
            unset($login);
        }
    }
    if(isset($_POST['password'])){ // Заносим введеный пользователем пароль, если пустой, то удаляем переменную 
        $password = $_POST['password'];
        if($password == ''){
            unset($password);
        }
    }
    if(empty($login) or empty ($password)){
        exit("Поля были введены не правильно, проверьте пожалуйста правильность ввода");
    }
    // Удаление лишних символов (пробелов)
    $login = htmlspecialchars($login);
    $password = htmlspecialchars($password);
    $login = trim($login);
    $password = trim($password);
    $logpas=$login."|".$password;
    $st_search = "logins.txt"; //название файла, в котором нужно найти (если нужно, то еще пропишите путь к файлу)
    if (strpos(file_get_contents("$st_search"), "$logpas"))
    {
        $_SESSION['login']=$login;
        header ('Location: loggeduser.php');  // перенаправление на нужную страницу
        exit();    // прерываем работу скрипта, чтобы забыл о прошлом
    } 
    else
    { 
        echo("Не правильные данные");
    }
?>