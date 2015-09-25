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
        <th>Celsius</th>
        <th>Fahrenheit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i =0; $i <= 100; $i++):
        $fahrenheit = ($i *(9/5)) + 32;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo round($fahrenheit); ?></td>
        </tr>
    <?php
    endfor;
    ?>
    </tbody>
</table>
</body>
</html>