<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>File Handling</h1>
<a href="data.txt" target="_blank" download>download</a>

<a></a>
    <?php
    $data = "hello \n";
    // $file = fopen('data.txt','w'); // write
    $file = fopen('data.txt','a'); //append
    fwrite($file,$data);
    fclose($file);

    $readFile = fopen("data.txt",'r');

    $length = filesize('data.txt');
    $read = fread($readFile, $length);
    echo $read;
    fclose($readFile);

    
    ?>
</body>
</html>