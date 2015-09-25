<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
    <?php
    echo "<h1>Current php version: ". phpversion();"</h1>";
    echo "<h1>Current zend version: ". zend_version();"</h1>";
    echo "<h1>Default mime type : ". ini_get("default_mimetype");"</h1>";
    ?>
</body>
</html>