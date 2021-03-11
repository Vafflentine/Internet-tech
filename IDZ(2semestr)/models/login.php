<?php
    include ("connect.php");
    session_start();
    if(isset($_POST['in']))
    {
        $stm = $pdo -> prepare("SELECT users.id, users.login, users.password FROM users WHERE users.login LIKE ? ");
        $stm ->execute(array($_POST['login']));
        $loginResult=$stm->fetchAll();
        if($loginResult[0]['login']==$_POST['login'] && password_verify($_POST['password'], $loginResult[0]['password'])==true)
        {
            $_SESSION['login']=$_POST['login'];
            $_SESSION['user_id']=$loginResult[0]['id'];
            header( "Location: ../views/user.php" );
        }
        else
        {
            header( "Location: ../views/error.html" );
        }
    }

    else if(isset($_POST['up']))
    {
        $stm = $pdo -> prepare("SELECT COUNT(1) FROM users WHERE users.login LIKE ? AND users.email LIKE ?");
        $stm ->execute(array($_POST['login-up'],$_POST['email-up']));
        $regResult=$stm->fetchAll(PDO::FETCH_COLUMN);
        if($regResult[0]==0)
        {
            $stm=$pdo -> prepare("INSERT INTO users (email, login, password) VALUES (?, ?, ?)");
            $stm ->execute(array($_POST['email-up'],$_POST['login-up'],password_hash($_POST['password-up'],PASSWORD_DEFAULT)));
            header( "Location: ../views/login.php" );
        }
        else
        {
            header( "Location: ../views/error.html" );
        }
    }
?>