<?php

// Just check if composer is available otherwise load it manually.
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
    return;
}

require_once __DIR__ . '/src/DayCounter.php';
