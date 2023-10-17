<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $n = 4;
    for($i=1;$i<=$n;$i++){
        for($space=1;$space<=$n-$i;$space++){
            echo "&nbsp&nbsp&nbsp";
        }
        for($j=$i;$j>=1;$j--){
            echo $j . " ";
        }
        for($k=2;$k<=$i;$k++){
            echo $k . " ";
        }
        echo "<br>";
    }

    for($i=$n-1;$i>=1;$i--){
        for($space=1;$space<=$n-$i;$space++){
            echo "&nbsp&nbsp&nbsp";
        }
        for($j=$i;$j>=1;$j--){
            echo $j . " ";
        }
        for($k=2;$k<=$i;$k++){
            echo $k . " ";
        }
        echo "<br>";
    }


    ?>
</body>
</html>