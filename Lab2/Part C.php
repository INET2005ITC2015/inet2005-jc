<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
        <title>Basic Info</title>
    </head>
    <body>
    <h1>Results:</h1>
    <?php
    $fName = $_POST["fName"];
    $lName = $_POST["lName"];
    $feetHeight = $_POST["fHeight"];
    $inchesHeight = $_POST["iHeight"];
    $meterHeight = round(($feetHeight/3.2808) + ($inchesHeight/39.370),2);

    echo "<p>Your First Name Is: $fName</p>";
    echo "<p>Your Last Name Is: $lName</p>";
    echo "<p>Your Height in Meters is: $meterHeight</p>"

    ?>
    <p><a href="Part C html.html">Back to Forum</a></p>
    </body>
    </html>