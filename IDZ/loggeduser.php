<?php
    //  вся процедура работает на сессиях. Именно в ней хранятся данные  пользователя, пока он находится на сайте. Очень важно запустить их в  самом начале странички!!!
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href = "style_logged.css">
    <script src="insertTable.js"></script>
    <title>Calculator of things</title>
</head>
<body>
    <!-- *********  side panel  ********** -->

   <div class="sidepanel">
       <div class="logo">
            <img src="img/calculate.svg" width="200" height="200" alt="image description">
            <h1>Calculator of things</h1>
       </div>

       <form action="login.html">
            <button class="login">Login</button><br>
       </form>

       <form action="reg.html">
            <button class="reg">Registration</button>
       </form>
       <form action="main.php">
            <button class="logout">Logout</button>
       </form>
       <form class="user-logo">
          <img src="img/user.svg" width="100" height="100" alt="image description">
       </form>
       <?php 
               echo "<p>Hello,<br>".$_SESSION['login'];echo"</p>";
       ?>
   </div>
   <div class="content_main">
     <form action="write.php" method="post">
          <p>Input your category:</p>
          <input required type="text" id="category" name="category"><br>
          <p>Input price:</p>
          <input type="text" id="price" name="price"><br>
          <input type="button" id="add" value="Add" onclick="insert()">
          <input type="submit" id="send" value="Send">
     </form>
     <table class="main-table" id="main-table">
          <thead>
          <tr>
            <td>Category</td>
            <td>Price</td>
          </tr>
          </thead>
          <tbody>
          </tbody>
     </table>
   </div>
</body>
</html>