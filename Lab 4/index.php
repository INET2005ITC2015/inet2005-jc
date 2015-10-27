<?php
// Start the session
session_start();
$_SESSION["newRadius"];
$_SESSION["newHeight"];
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
    <fieldset>
        <legend>Circle:</legend>
        Radius: <input type="text" name="radius" value="<?php if(!empty($_SESSION['newRadius'])){ echo $_SESSION['newRadius'];}else{ echo $_POST['radius'];}?>">
    </fieldset>

    <fieldset>
        <legend>Triangle:</legend>
        Base:   <input type="text" name="base" value="<?php echo $_POST['base']?>" >
        Height: <input type="text" name="heightT" value="<?php if(!empty($_SESSION['newHeight'])){ echo $_SESSION['newHeight'];}else{ echo $_POST['heightT'];}?>">
    </fieldset>

    <fieldset>
        <legend>Rectangle:</legend>
        Width:  <input type="text" name="width" value="<?php echo $_POST['width']?>">
        Height: <input type="text" name="heightR" value="<?php echo $_POST['heightR']?>">
    </fieldset>

    <fieldset>
        <legend>Resize:</legend>
        Percent of Original:  <input type="text" name="percent" value="<?php echo $_POST['percent']?>">
    </fieldset>

    <input type="Submit" value="Calc">
    <input type="submit" value="Resize">
</form>

<?php
require_once("Triangle.php");
require_once("Rectangle.php");
require_once("Circle.php");
if(!empty($_POST["radius"]) && !empty($_POST["base"]) && !empty($_POST["heightT"]) && !empty($_POST["width"]) && !empty($_POST["heightR"])) {
    echo "<p>Results:</p>";
    $myCircle = new Circle('Circle', $_POST["radius"]);
    echo "<h1>Shape: " . $myCircle->getName() . "</h1>";
    echo "<p> Area: " . $myCircle->CalculateSize() . "</p>";
    if (!empty($_POST['percent'])) {
        $newRadius = $myCircle->changeSize($myCircle->CalculateSize(), $_POST["percent"]);
        $_SESSION['newRadius'] = $newRadius;
        $myCircle = new Circle('Circle', $newRadius);
        echo "<p> New Radius: " . $newRadius . "</p>";
        echo "<p> New Area: " . $myCircle->CalculateSize() . "</p>";
    }
    $myTri = new Triangle('Triangle', $_POST["base"], $_POST['heightT']);
    echo "<h1>Shape: " . $myTri->getName() . "</h1>";
    echo "<p> Area: " . $myTri->CalculateSize() . "</p>";
    if (!empty($_POST['percent'])) {
        $newHeight = $myTri->changeSize($myTri->CalculateSize(), $_POST["percent"]);
        $_SESSION['newHeight'] = $newHeight;
        $myTri = new Triangle('Triangle', $_POST["base"], $newHeight);
        echo "<p> New Height: " . $newHeight . "</p>";
        echo "<p> New Area: " . $myTri->CalculateSize() . "</p>";
    }
    $myRec = new Rectangle('Rectangle', $_POST["width"], $_POST['heightR']);
    echo "<h1>Shape: " . $myRec->getName() . "</h1>";
    echo "<p> Area: " . $myRec->CalculateSize() . "</p>";
}
?>
</body>
</html>