<?php
require 'vendor/autoload.php';

use TYPO3Fluid\Fluid;

// Erstelle ein neues Fluid-Objekt
$fluid = new Fluid();

// Lade das Template
$template = file_get_contents('Templates.html');

// Erstelle ein Array mit den Werten, die in das Template eingefügt werden sollen
$values = [
    'title' => 'Willkommen',
    'heading' => 'Hallo Welt!',
    'content' => 'Dies ist ein einfaches Beispiel für die Fluid Templating Engine in PHP.'
];

// Render das Template mit den Werten
$output = $fluid->render($template, $values);

// Gib das gerenderte Template aus
echo $output;
