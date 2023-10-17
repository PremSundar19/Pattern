<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="findroute.php" method="post">
       <pre>
        Route : <input type="text" name="route"><br>
                <input type="submit" value="submit">
       </pre>
    </form>


<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $route = strtolower($_POST['route']);
$D = 0;
$U = 0;
$L = 0;
$R = 0;
 
$x = 0;
$y = 0;

   for($i=0;$i<strlen($route);$i++){
       if($route[$i] == "d" && ctype_digit($route[$i+1])){
        $D += $route[$i+1];
        // $y -=$D;
       }else if($route[$i] == "u" && ctype_digit($route[$i+1])){
        $U += $route[$i+1];
        // $y +=$U;
       }else if($route[$i] == "l" && ctype_digit( $route[$i+1])){
        $L += $route[$i+1];
        // $x -=$L;
       }else if($route[$i] == "r" && ctype_digit( $route[$i+1])){
        $R += $route[$i+1];
        // $x +=$R;
       }
   }
  

   $y = -$D + $U;
   $x = -$L + $R;
  
  if($x == 0 && $y == 0){
    echo "X = $x & Y = $y  at center point";
  }else if($x > 0 && $y > 0){  
   echo  "(X = $x , Y = $y) at 1st quadrant";
  }else if($x < 0 && $y > 0){
   echo  "(X = $x , Y = $y) at 2nd quadrant";
  }else if($x < 0 && $y < 0){
   echo  "(X = $x , Y = $y) at 3rd quadrant";
  }else if($x > 0 && $y < 0){
   echo  "(X = $x , Y = $y) at 4th quadrant";
  }else{
     echo "(X = $x , Y = $y)  on the axis";
  }
}

?>    
</body>
</html>