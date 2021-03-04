<?php
 require_once "init.php";
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

    #output3 
    {
	    width: 30%;
    }   
    #output3 td 
    {
	    width: 100px;
	    border: 1px solid #ddd;
	    padding: 7px 10px;
    }

    .left { position: absolute; left: 0; top: 0; width: 50%;}
    .right { position: absolute; right: 0; top: 0; width: 50%;}
    </style>
    <script src="storage.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="lef">
<div class="first">
   <label><b>First Requsest</b></label>
   <p><select name="league">
   <option value="">Choose:</option>
   <?php                         
    foreach ($cursor1 as $document) 
    {
        $document = htmlspecialchars($document); 
        echo '<option value="'. $document .'">'. $document .'</option>';
    }
   ?>
</select>
<input name = "submit" type="submit" value="Получить информацию" onclick="test1()">
</div><br>


<div class="second">
   <label><b>Second Requsest</b></label>
   <p><select name="teamg">
   <option value="">Choose:</option>
   <?php                         
    foreach ($cursor2 as $document) 
    {
        $document = htmlspecialchars($document); 
        echo '<option value="'. $document .'">'. $document .'</option>';
    }
   ?>
</select>
<input name = "submit" type="submit" value="Получить информацию" onclick="test2()">
</div><br>


<div class="third">
   <label><b>Third Requsest</b></label>
   <p><select name="teams">
   <option value="">Choose:</option>
   <?php                         
    foreach ($cursor2 as $document) 
    {
        $document = htmlspecialchars($document); 
        echo '<option value="'. $document .'">'. $document .'</option>';
    }
   ?>
</select>
<input name = "submit" type="submit" value="Получить информацию" onclick="test3()">
</div><br>
<button onclick="warning()">Clock</button>
<table id="output3"></table>
</div>
<div class="right">
<div id="localf"></div><br>
<div id="locals"></div><br>
<div id="localt"></div><br>
</div>
</body>
</html>