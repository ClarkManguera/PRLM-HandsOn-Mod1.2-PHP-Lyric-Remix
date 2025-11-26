<?php
$products = [
    'Beef Siomai' => 25.00,
    'Pork' => 25.00,
    'Chicken' => 30.00,
];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>USING WHILE LOOPS</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
<body>
<h1>Ang ProbinSiomai</h1>
<h2>Price List</h2>
<table>
    <tr>
        <th>Item</th>
        <th>Price</th>
    </tr>
    <?php foreach ($products as $item => $price) { ?>
        <tr>
            <td><?= $item ?></td> 
            <td><?= $price ?></td>
        </tr>
    <?php } ?>
    </body>
    </table>
    <?php include 'includes/footer.php'; ?>
    </html>