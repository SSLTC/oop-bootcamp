<?php declare(strict_types=1);

$basket = array(
    array("Item" => "Banana", "Sort" => "Fruit", "Amount" => 6, "Price" => 1),
    array("Item" => "Apple", "Sort" => "Fruit", "Amount" => 3, "Price" => 1.5),
    array("Item" => "Wine", "Sort" => "Alcohol", "Amount" => 2, "Price" => 10)
);

$VAT = array("Fruit" => 6, "Alcohol" => 21);

$totalBasketPrice = 0;
$basketVAT = 0;

foreach($basket as $index) {
    $totalItemPrice = $index['Amount'] * $index['Price'];
    $VATpart = $totalItemPrice * ($VAT[$index['Sort']]/100);

    echo "Total price of {$index['Item']} is € {$totalItemPrice}";
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