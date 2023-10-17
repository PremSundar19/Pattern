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
for($i=0;$i<$n;$i++){
    for($j=0;$j<$n;$j++){        
        $half = floor($n/2);
        if($j ==$half && $i != $j){
           echo "*";
        }else{
           echo "&nbsp&nbsp";
        }
        if($i == $half){
            echo "*";
        }else{
            echo "&nbsp&nbsp&nbsp";
        }
    }
    echo "<br>";
}
?>
</body>
</html>