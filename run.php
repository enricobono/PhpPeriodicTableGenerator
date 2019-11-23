<?php

use PeriodicTable\Elements\ElementExporter;
use PeriodicTable\Elements\ElementRepository;
use Intervention\Image\ImageManager;

require_once 'vendor/autoload.php';

$elementRepository = new ElementRepository();
$elements = $elementRepository->getElements();

$exporter = new ElementExporter(new ImageManager());

$count = 0;
foreach ($elements as $element) {

    try {
        $exporter->export($element);
        $count++;
        echo '.';
    } catch (Exception $e) {
        die($e->getMessage());
    }
}

echo "\nCompleted: $count elements\n";