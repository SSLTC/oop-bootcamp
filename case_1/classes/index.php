<?php declare(strict_types=1);

require 'BasketItem.php';

$banana = new BasketItem('Banana', 'Fruit', 1);
$apple = new BasketItem('Apple', 'Fruit', 1.5);
$wine = new BasketItem('Wine', 'Alcohol', 10);

$basket = array(
    array("Item" => $banana, "Amount" => 6),
    array("Item" => $apple, "Amount" => 3),
    array("Item" => $wine, "Amount" => 2)
);

$VAT = array("Fruit" => 6, "Alcohol" => 21);

$totalBasketPrice = 0;
$basketVAT = 0;

foreach($basket as $index) {
    $totalItemPrice = $index['Amount'] * $index['Item']->getPrice();
    $VATpart = $totalItemPrice * ($VAT[$index['Item']->getSort()]/100);

    echo "Total price of {$index['Item']->getName()} is € {$totalItemPrice}";
    echo "<br>";
    echo "Where of {$VATpart} VAT";
    echo "<br>";

    $totalBasketPrice += $totalItemPrice;
    $basketVAT += $VATpart;
}

echo "Total basket price is € {$totalBasketPrice}";
echo "<br>";
echo "Where of {$basketVAT} VAT";
echo "<br>";