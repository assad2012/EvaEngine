<?php
if (!extension_loaded('phalcon')) {
    die('Phalcon extension not loaded');
}
$loader = include __DIR__ . '/../vendor/autoload.php';

$loader->addPsr4('Eva\\EvaEngineTest\\', __DIR__ . '/EvaEngineTest/');

