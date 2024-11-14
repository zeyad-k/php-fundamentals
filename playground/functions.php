<?php
function sayHello()
{
    echo 'Hello World!';
}
sayHello();

echo "\n";

function sayHelloTo($name)
{
    echo "Hello $name!\n";
    ;
}
sayHelloTo('PHP');

//  you can force a data type for a parameter by adding a colon and the data type after the parameter name
function calculateTax($a, $b): int
{
    return $a + $b;
}
echo calculateTax(2, 3);

echo "\n";

function calculateTax2(string $item, int $price, float $tax): string
{
    $total = $price * $tax;
    return "The total cost of $item is $total";
}
echo calculateTax2('car', 2000, 0.3);




