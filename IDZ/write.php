<?php 
session_start();
if(isset($_POST['category'])){ // Заносим введеный пользователем логин, если пустой, то удаляем переменную 
    $category = $_POST['category'];
    if( $category == ''){
        unset($category);
    }
}
if(isset($_POST['price'])){ // Заносим введеный пользователем пароль, если пустой, то удаляем переменную 
    $price = $_POST['price'];
    if($price == ''){
        $price=0;
    }
}
if(empty($category) or empty ($price)){
    exit("Поля были введены не правильно, проверьте пожалуйста правильность ввода");
}

$category = htmlspecialchars($category);
$price = htmlspecialchars($price);
$category = trim($category);
$price = trim($price);
$path="users-info/".$_SESSION['login']."-info.txt";
$fp=fopen($path, 'a+');
fwrite($fp, $category);
fwrite($fp,"|");
fwrite($fp,$price."\r\n");
fclose($fp);
header ('Location: loggeduser.php');  // перенаправление на нужную страницу
exit();    // прерываем работу скрипта, чтобы забыл о прошлом
?>