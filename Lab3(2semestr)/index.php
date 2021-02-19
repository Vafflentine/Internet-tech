<?php
include "ini.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
    <style>
        .first, .second, .third{
            margin-top: 20px;
            margin-bottom: 20px;
}
    </style>
</head>
<body>

<form method="GET" name="first">
   <label><b>First Requsest</b></label>
   <p><select id="league_id" name="league_id">
   <option value="">Choose:</option>
   <?php                         
    foreach($stm as $category => $value) 
    {
       $category = htmlspecialchars($category); 
       echo '<option value="'. $value .'">'. $value .'</option>';
    }
   ?>
</select>
<input name = "submit" type="button" value="Получить информацию" onclick="get1();">
</form><br>

<div id="output"></div>


<form method="GET" class="second">
    <label><b>Second Request</b></label>
    <input type="text" placeholder="yyyy-mm-dd" name="first-date" id="first-date"></input>
    <input type="text" placeholder="yyyy-mm-dd" name="second-date" id="second-date"></input>
    <input name = "submit-second" type="button" value="Получить информацию" onclick="get2();">
</form><br>

<table id="output2" border="1"></table>


<form method="GET" class="third">
   <label><b>Third Request</b></label>
   <p><select id="team" name="team">
   <option value="">Choose:</option>
   <?php                         
    foreach($stm1 as $category => $value) 
    {
       $category = htmlspecialchars($category); 
       echo '<option value="'. $value .'">'. $value .'</option>';
    }
   ?>
   </select>
   <input name = "submit" type="button" value="Найти" onclick="get3();">

   <p><select id="player" name="player">
   <option value="">Choose:</option>
   </select>
   <br><br>
   <input name = "submit" type="button" value="Получить информацию" onclick="get4();">
</form>

<table id="output3" border="1"></table>

</body>
</html>