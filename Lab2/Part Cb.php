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
echo "<p>Hello, $name</p>";
$month = $_GET["bMonth"];
$day = $_GET["bDay"];
$sign = " ";

switch ($month) {
    case "01": if($day <= 19){
        $sign = "Capricorn";
    }else{
        $sign = "Aquarius";
    }
        break;
    case "02": if($day <= 18){
        $sign = "Aquarius";
    }else{
        $sign = "Pisces";
    }
        break;
    case "03": if($day <= 20){
        $sign = "Pisces";
    }else{
        $sign = "Aries";
    }
        break;
    case "04": if($day <= 19){
        $sign = "Aries";
    }else{
        $sign = "Taurus";
    }
        break;
    case "05": if($day <= 20){
        $sign = "Taurus";
    }else{
        $sign = "Gemini";
    }
        break;
    case "06": if($day <= 20){
        $sign = "Gemini";
    }else{
        $sign = "Cancer";
    }
        break;
    case "07": if($day <= 22){
        $sign = "Cancer";
    }else{
        $sign = "Leo";
    }
        break;
    case "08": if($day <= 22){
        $sign = "Leo";
    }else{
        $sign = "Virgo";
    }
        break;
    case "09": if($day <= 22){
        $sign = "Virgo";
    }else{
        $sign = "Libra";
    }
        break;
    case "10": if($day <= 22){
        $sign = "Libra";
    }else{
        $sign = "Scorpio";
    }
        break;
    case "11": if($day <= 21){
        $sign = "Scorpio";
    }else{
        $sign = "Sagittarius";
    }
        break;
    case "12": if($day <= 21){
        $sign = "Sagittarius";
    }else{
        $sign = "Capricorn";
    }
        break;
};

echo "<p>Your zodiac sign is: $sign</p>";
?>
<p><a href="Part Cb html.html">Back to Forum</a></p>

</body>
</html>