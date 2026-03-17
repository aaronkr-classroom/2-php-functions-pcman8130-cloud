<?php
/* if, switch, match */
$stock = 0;  
$ordered = 3;

// IF문
if ($stock > 0) {
    $message = "In stock";
} elseif ($ordered > 0) {
    $message = "Coming soon";
} else {
    $message = "Sold out!";
}

// SWITCH 문
$day = 'Tuesday';

switch($day){
    case 'Monday':
        $offer = '20% off chocolates';
        break;
    case 'Tuesday':
        $offer = '20% off mints';
        break;
    default:
        $offer = '3 + 1 mints';
}

//  MATCH문
$month = 'March';  

$mth_offer = match($month){
    'January, Febryary' => '20% off mints',
    'March'             => '20% off chocolates',   //완벽히 같아야 됨.
    default             => '10% off whole ordar',
}

?>

<!DOCTYPE html>
<hyml>
    <head>
        <title> If, switch, match</title> 
        <link rel="stylesheet" href="css/styles.css">
    </head> 
    <body>
        <h1>The Candy Store</h>

        <h2>Chocolate</h2>
        <p><?= $message ?></p>

        <h2>Offers on <?= $day; ?></h2>
        <p><?= $offer; ?></p>

        <h2>Offers in <?= $month; ?></h2>
        <p><?= $mth_offer; ?></p>
    </body>
</hyml>       