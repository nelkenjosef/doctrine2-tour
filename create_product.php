<?php
// create_product.php

/**
 * file for inserting products
 *
 * @version 1.0
 * @author  nelkenjosef
 * @since   file available since release 1.0.2
 */

require_once 'bootstrap.php';

$args = $_SERVER['argv'];

$newProductName = $args[1];

$product = new Product();
$product->setName($newProductName);

$entityManager->persist($product);
$entityManager->flush();

echo 'created product with ID ' . $product->getId() . PHP_EOL;
