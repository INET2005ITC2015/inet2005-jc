<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Circle:</legend>
        Radius: <input type="text" name="radius">
    </fieldset>

    <fieldset>
        <legend>Rectangle:</legend>
        Width:  <input type="text" name="width">
        Height: <input type="text" name="heightR">
    </fieldset>

    <fieldset>
        <legend>Triangle:</legend>
        Base:   <input type="text" name="base">
        Height: <input type="text" name="heightT">
    </fieldset>

    <fieldset>
        <legend>Resize:</legend>
        Percent:   <input type="text" name="percent">
    </fieldset>

    <input type="Submit" value="Calc">
</form>

<p>Results:</p>

<?php

require_once("Triangle.php");
require_once("Rectangle.php");
require_once("Circle.php");

$myCircle = new Circle('Circle', $_POST["radius"]);

echo "<h1>Shape: ".$myCircle->getName()."</h1>";
echo "<p> Area: ".$myCircle->CalculateSize()."</p>";
$newRadius = $myCircle->changeSize($myCircle->CalculateSize(), $_POST["percent"]);
$myCircle = new Circle('Circle', $newRadius);
echo "<p> Resized Area: ". $myCircle->CalculateSize();

$myTri = new Triangle('Triangle', $_POST["base"], $_POST['heightT']);

echo "<h1>Shape: ".$myTri->getName()."</h1>";
echo "<p> Area: ".$myTri->CalculateSize()."</p>";
$newHeight = $myTri->changeSize($myTri->CalculateSize(),$_POST["percent"]);
$myTri = new Triangle('Triangle', $_POST["base"], $newHeight);
echo "<p> Resized Area: ". $myTri->CalculateSize();

$myRec = new Rectangle('Rectangle', $_POST["width"], $_POST['heightR']);

echo "<h1>Shape: ".$myRec->getName()."</h1>";
echo "<p> Area: ".$myRec->CalculateSize()."</p>";

?>
</body>
</html>