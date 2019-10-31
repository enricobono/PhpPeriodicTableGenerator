<?php

use PeriodicTable\Elements\ElementExporter;
use PeriodicTable\Elements\ElementRepository;
use Intervention\Image\ImageManager;

require_once 'vendor/autoload.php';

$elementRepository = new ElementRepository();
$elements = $elementRepository->getElements();

$exporter = new ElementExporter(new ImageManager());

foreach ($elements as $element) {
    $exporter->export($element);
    echo '.';
}

echo "\nCompleted";