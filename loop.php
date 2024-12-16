<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    // $num = 1;
    // $num++;
    // $num++;
    // $num--;
    // echo $num;
?>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <table class="table">
        <?php
            $tab = 10; 
            for($i = 0; $i<=10; $i++){
            ?>
            <tr>
                <td><?php echo $tab;?></td>
                <td>*</td>
                <td><?php echo $i;?></td>
                <td>=</td>
                <td><?php echo $i*$tab;?></td>
            </tr>
            <?php
            }
        ?>
        </table>
        </div>
    </div>
</section>
<?php
    $j = 1;
    while($j<=5){
        echo $j;
        $j++;
    }

    $k= 1;
    do{
     echo $k;
     $k++;
     echo "<br>";
    }
    while($k<=5);

    ?>
</body>
</html>