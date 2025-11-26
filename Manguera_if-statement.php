<?php
$name       = 'Cardo';
$greeting   = 'Hello';

if ($name !== '') {
    $greeting = 'Welcome back, ' . $name;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Using IF Statement</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h1>Ang ProbinSiomai</h1>
        <h2><?= $greeting ?></h2>
    </body>
</html>