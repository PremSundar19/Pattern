<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
   $n = 3;
   //upwards
   for($i=1;$i<=$n;$i++){
       for($space=1;$space<=$n-$i;$space++){
           echo "&nbsp&nbsp&nbsp";
       }
       for($j=$i;$j>=1;$j--){
           echo "* ";
       }
       for($k=2;$k<=$i;$k++){
           echo "* ";
       }
       echo "<br>";
   }
//downwards
   for($i=$n-1;$i>=1;$i--){
       for($space=1;$space<=$n-$i;$space++){
           echo "&nbsp&nbsp&nbsp";
       }
       for($j=$i;$j>=1;$j--){
           echo "* ";
       }
       for($k=2;$k<=$i;$k++){
           echo "* ";
       }
       echo "<br>";
   }

    ?>
</body>
</html>