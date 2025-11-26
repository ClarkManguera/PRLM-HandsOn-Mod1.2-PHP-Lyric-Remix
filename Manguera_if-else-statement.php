<?php
$stock = 0;

if ($stock > 0) {
    $message = 'In stock';
 } else {
    $message = 'More Stock coming soon';
 }

?>
<!DOCTYPE html>
<html>
<html>
    <head>
        <title>Using IF...Else Statement</title>
        <link rel="stylesheet" href="css/styles.css">
    </head><body>
<h1>Ang ProbinSiomai</h1>
<h2>Beef Siomai</h2>
<p> <?= $message ?></p>
</body>
<?php include 'includes/footer.php'; ?>
</html>