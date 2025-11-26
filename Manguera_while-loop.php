<?php
$counter = 1;
$packs = 5;
$price = 15.00;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>USING WHILE LOOPS</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
<body>
    <h1>Ang ProbinSiomai</h1>
    <h2>Prices for Multiple Packs</h2>
    <p>
    <?php
    while ($counter <= $packs) {
        echo $counter;
        echo ' packs cost P';
        echo $price * $counter;
        echo '<br>';
        $counter++;
    }
    ?>
    <?php include 'includes/footer.php'; ?>
</p>