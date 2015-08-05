<?php
// bootstrap.php

require 'vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

// create simple default Doctrine2 ORM config for annotations
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(
    array(__DIR__ . '/src'),
    $isDevMode);

// db config params
$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);

// obtaining entity manager
$entityManager = EntityManager::create($conn, $config);
