<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <form action="flames.php" method="post">
    <pre>
     Name   : <input type="text" name="name1" placeholder="Enter Your Name"><br>
     Patner : <input type="text" name="name2" placeholder="Enter Patner Name"><br>
              <input type="submit" value="submit">
    </pre>
   </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name1 = strtolower($_POST["name1"]);
    $name2 = strtolower($_POST["name2"]);
    $name1 = str_split(str_replace(" ","",$name1));
    $name2 = str_split(str_replace(" ","",$name2));

    $yname = implode("",$name1);
    $pname = implode("",$name2);

    if($name1 == $name2){
       echo "<h2>you are not eligible to play</h2>";
    }else{

        for($i=0;$i<sizeof($name1);$i++){
           for($j=0;$j<sizeof($name2);$j++){
              if($name1[$i] == $name2[$j]){
                $name1[$i] = "/";
                $name2[$j] = "/";
              }
           }
       }

$str1 = str_replace("/","",implode("",$name1));
$str2 = str_replace("/","",implode("",$name2));

$count =strlen($str1) + strlen($str2);
$result = "";
$flames = ["Friends", "Love", "Affection", "Marriage", "Enemies", "Siblings"]; 
                                
    $index = 0;
    while (count($flames) > 1) {
        $index = ($index + $count-1) % count($flames);
        array_splice($flames, $index,1);
    }    
   $result = $flames[0];

if (!empty($result)) {
    echo "<p>The relationship between {$yname} and {$pname}  : <strong>{$result}</strong></p>";
} else {
    echo "<p>Please enter valid names to calculate the result.</p>";
}
 }
}

?>
</body>
</html>