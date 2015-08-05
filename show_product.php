<?php
// show_product.php <id>

/**
 * file for showing one product by id
 *
 * @version 1.0
 * @author  nelkenjosef
 * @since   file available since release 1.0.3
 */

require_once 'bootstrap.php';

$args = $_SERVER['argv'];

$id = $args[1];
$product = $entityManager->find('Product', $id);

if (null === $product) {
    echo 'No product found.' . PHP_EOL;
    exit;
}

echo sprintf("-%s\n", $product->getName());
