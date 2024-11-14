<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Crypto Masters</h1>
    <h3>Conversion Result</h3>
    <?php
    $amount = $_GET['amount'];
    $crypto = $_GET['crypto'];
    $price = 0;
    if ($crypto == 'BTC') {
        $price = 50000;
    } elseif ($crypto == 'ETH') {
        $price = 3000;
    } elseif ($crypto == 'LTC') {
        $price = 200;
    } elseif ($crypto == 'XRP') {
        $price = 1;
    }
    $total = $amount * $price;
    echo "<p>The total amount of $amount $crypto is $total</p>";
    ?>

</body>

</html>