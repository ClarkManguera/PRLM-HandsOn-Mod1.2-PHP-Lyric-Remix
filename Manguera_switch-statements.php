<?php
$day = 'Monday';

switch ($day) {
    case 'Monday':
        $offer = '+1 extra Siomai';
        break;
    case 'Tuesday':
        $offer = 'Free Gulaman';
        break;
    default:
        $offer = 'P100 For 6 Siomai';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>USING SWITCH STATEMENTS</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
<body>
<h1>Ang ProbinSiomai</h1>
<h2>Offers on <?= $day; ?></h2>
<p> <?= $offer ?></p>
</body>
<?php include 'includes/footer.php'; ?>

</html>