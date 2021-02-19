<?php
include "ini.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .first, .second, .third{
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<form action="first.php" method="POST" class="first">
   <label><b>First Requsest</b></label>
   <p><select name="league_id">
   <option value="">Choose:</option>
   <?php                         
    foreach($stm as $category => $value) 
    {
       $category = htmlspecialchars($category); 
       echo '<option value="'. $value .'">'. $value .'</option>';
    }
   ?>
</select>
<input name = "submit" type="submit" value="Получить информацию">
</form><br>


<form action="second.php" method="POST" class="second">
    <label><b>Second Request</b></label>
    <input type="text" placeholder="yyyy-mm-dd" name="first"></input>
    <input type="text" placeholder="yyyy-mm-dd"name="second"></input>
    <button type="submit" name="sub">Go!</button>
</form><br>


<form action="third.php" method="POST" class="third">
   <label><b>Third Request</b></label>
   <p><select name="team">
   <option value="">Choose:</option>
   <?php                         
    foreach($stm1 as $category => $value) 
    {
       $category = htmlspecialchars($category); 
       echo '<option value="'. $value .'">'. $value .'</option>';
    }
   ?>
   </select>

   <p><select name="player">
   <option value="">Choose:</option>
   <?php                         
    foreach($stm2 as $category => $value) 
    {
       $category = htmlspecialchars($category); 
       echo '<option value="'. $value .'">'. $value .'</option>';
    }
   ?>
   </select>
    <button type="submit">Go!</button>
</form>

</body>
</html>