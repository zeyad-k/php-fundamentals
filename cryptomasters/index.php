<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cryoto Masters</title>
</head>

<body>
    <!--  php -S localhost:4000  -->
    <!-- http://localhost:4000 -->
    <h1>Cryoto Masters</h1>



    <h3>Enter Amount of Crypto</h3>
    <form action="convert.php" method="get">
        <input type="text" name="amount" placeholder="Enter Amount">
        <select name="crypto">
            <option value="BTC">BTC</option>
            <option value="ETH">ETH</option>
            <option value="LTC">LTC</option>
            <option value="XRP">XRP</option>
        </select>
        <button type="submit">Convert</button>
    </form>


</body>

</html>