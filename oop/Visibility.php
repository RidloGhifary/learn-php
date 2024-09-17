<?php

require_once "./data/Product.php";

$product = new Product("Apple", 3000);

echo $product->getProduct() . PHP_EOL;

$dummy = new ProductDummy("Dummny", 10000);
$dummy->info();
