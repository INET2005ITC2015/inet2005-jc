<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
  <title></title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Fahrenheit</th>
        <th>Celsius</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i =0; $i <= 100; $i++):
        $celsius = ($i - 32)*(5/9);
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo round($celsius); ?></td>
        </tr>
    <?php
    endfor;
    ?>
    </tbody>
</table>
</body>
</html>