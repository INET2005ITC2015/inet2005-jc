<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Zodiac</title>
</head>
<body>
<h1>Your Zodiac Sign</h1>
<?php

$name = $_GET["fName"]. " " . $_GET["lName"];
echo "<p>Hello, $name</p>.";
$month = $_GET["bMonth"];
$day = $_GET["bDay"];
$sign = " ";

switch ($month) {
    case "01": if($day <= 19){
        $sign = "Capricorn";
    }else{
        $sign = "Aquarius";
    }
    case "02": if($day <= 18){
        $sign = "Aquarius";
    }else{
        $sign = "Pisces";
    }
    case "03": if($day <= 20){
        $sign = "Pisces";
    }else{
        $sign = "Aries";
    }
    case "04": if($day <= 21){
        $sign = "Aries";
    }else{
        $sign = "Taurus";
    }
    case "05": if($day <= 20){
        $sign = "Taurus";
    }else{
        $sign = "Gemini";
    }


};



?>

</body>
</html>