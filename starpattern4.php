<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $rows = 3;
    //upwards
    for ($i=1;$i<=$rows;$i++){  
         for ($j=$rows;$j>$i;$j--){  
              echo "&nbsp;&nbsp;";
             }  
    echo "*";
         for ($k=1;$k<2*($i-1);$k++){  
              echo "&nbsp;&nbsp;"; 
             }  
        if($i==1){   
           echo "&nbsp;&nbsp;";
        }else{  
           echo "*";
        }
        echo "<br>";  
    }
     //downwards
    for ($i=$rows-1;$i>=1;$i--){  
        for ($j=$rows;$j>$i;$j--){  
             echo "&nbsp;&nbsp;";
            }
            echo "*";  
        for ($k=1;$k<2*($i -1);$k++){  
            echo "&nbsp;&nbsp;";
            }  
        if($i==1){
             echo "&nbsp;&nbsp;";
        }else{
             echo "*";
        } 
    echo "<br>";   
    }  
    
    ?>
    
</body>
</html>