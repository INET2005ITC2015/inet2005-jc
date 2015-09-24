<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>Kilos</th>
        <th>Pounds</th>
    </tr>
    </thead>
    <tbody>
    <?php
    for ($i =10; $i <= 100; $i+=10):
        $pounds = $i * 2.2;
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $pounds; ?></td>
        </tr>
    <?php
    endfor; // end of for loop for kilo table
    ?>
    </tbody>
</table>
</body>
</html>