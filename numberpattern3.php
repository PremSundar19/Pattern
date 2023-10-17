<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n = 5;
    for($i=1;$i<=$n;$i++){ 
        for($j=1;$j<=$i;$j++){
           if((($i + $j) % 2 == 0)){
            echo "1 ";
           }else{
            echo "0 ";
           }
        }
        echo "<br>";
    }
    ?>
</body>
</html>