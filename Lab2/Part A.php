<!DOCTYPE html>
<?php

    function headerEcho()
    {
        if (isset($_POST['string']) && isset($_POST['number'])) {
            $userString = $_POST["string"];
            $headerSize = $_POST["number"];
            if ($headerSize == 1) {
                echo "<h1>$userString</h1>";
            } else if ($headerSize == 2) {
                echo "<h2>$userString</h2>";
            } else if ($headerSize == 3) {
                echo "<h3>$userString</h3>";
            } else if ($headerSize == 4) {
                echo "<h4>$userString</h4>";
            } else if ($headerSize == 5) {
                echo "<h5>$userString</h5>";
            } else if ($headerSize == 6) {
                echo "<h6>$userString</h6>";
            } else
                echo("Choose a Number between 1-6");
        }
    }
?>

<html>
    <head lang="en">
      <meta charset="UTF-8">
      <title>Header Generator</title>
    </head>
    <body>
        <h1>Step 1</h1>
        <form action= "<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <p>Header String: <input type="text" name="string" /></p>
            <p>Header Size: <input type="text" name="number" /></p>
            <p><input type="submit" name="Submit" value="Generate Header"/></p>
        </form>
        <?php headerEcho($_POST["string"], $_POST["number"]); ?>
        <?php
            for($x = 1; $x <= 7; $x++){
                $_POST["number"] = $x;
                headerEcho($_POST["string"], $_POST["number"]);
            }
        ?>

    </body>
</html>