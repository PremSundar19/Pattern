<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n= 6;  
    for ($i=1; $i<=$n; $i++){  
         for($space=$n-$i;$space>=1;$space--){
            echo "&ensp;";
         }
    for($k=1;$k<= $i;$k++){
        if(  $i== $n ||  $k == 1 || $k == $i){
            echo "* "; 
        }else{
            echo "&nbsp&nbsp&nbsp";
        }
    }  
    echo "<br>";  
    }      
    ?>
</body>
</html>