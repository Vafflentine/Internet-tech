< ?php 
$file = @file("counter.txt");
$count = @implode("", $file);
$count++;
$myfile = fopen("counter.txt","w");
fputs($myfile,$count);
fclose($myfile);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <p>Просмотров:<span><?=$count ?></span> </p>
    </div>
</body>
</html>