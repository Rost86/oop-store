<?php

use OOPStore\Category;
use OOPStore\Product;
use OOPStore\Store;

\spl_autoload_register(function ($class) {
    require __DIR__ . DIRECTORY_SEPARATOR .'src' . DIRECTORY_SEPARATOR . \str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

$category = new Category('TV');
$product1 = new Product($category, 'LG LX35', 10000);
$product2 = new Product($category, 'LG LX35', 10000);
$store = new Store();



var_dump($product1->getId());
var_dump($product2->getId());

$store->addProduct($product1);
$store->addProduct($product1);
$store->addProduct($product2);

print_r($store->getProducts());
