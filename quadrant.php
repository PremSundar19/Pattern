<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 $x = $_GET['num1'];
 $y = $_GET['num2'];

 if($x == 0 && $y == 0){
   echo "X = $x & Y = $y  at center point";
 }else if($x > 0 && $y > 0){
  echo  "X = $x & Y = $y at 1st quadrant";
 }else if($x < 0 && $y > 0){
  echo  "X = $x & Y = $y at  2nd quadrant";
 }else if($x < 0 && $y < 0){
  echo  "X = $x & Y = $y at 3rd quadrant";
 }else if($x > 0 && $y < 0){
  echo  "X = $x & Y = $y at 4th quadrant";
 }else{
    echo "X = $x &  Y = $y  on the axis";
 }
?>
</body>
</html>