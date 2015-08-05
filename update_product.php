<?php
// update_product.php <id> <new-name>

/**
 * file for updating a product-name by id
 *
 * @version 1.0
 * @author  nelkenjosef
 * @since   file available since release 1.0.4
 */

require_once 'bootstrap.php';

$args = $_SERVER['argv'];

$id = $args[1];
$newName = $args[2];

$product = $entityManager->find('Product', $id);

if (null === $product) {
    echo 'No product found.' . PHP_EOL;
    exit;
}

$product->setName($newName);

$entityManager->flush();
