<?php
// list_products.php

/**
 * file for listing products
 *
 * @version 1.0
 * @author  nelkenjosef
 * @since   file available since release 1.0.3
 */

require_once 'bootstrap.php';


$productionRepository = $entityManager->getRepository('Product');
$products = $productionRepository->findAll();

foreach ($products as $product) {
    echo sprintf("%s\n", $product->getName());
}
