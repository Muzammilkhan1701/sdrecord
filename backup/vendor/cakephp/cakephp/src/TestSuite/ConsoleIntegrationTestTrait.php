<?php
declare(strict_types=1);

use function Cake\Core\deprecationWarning;

deprecationWarning(
    'Since 4.3.0: Cake\TestSuite\ConsoleIntegrationTestTrait is deprecated. ' .
    'Use Cake\Console\TestSuite\ConsoleIntegrationTestTrait instead.'
);
class_exists('Cake\Console\TestSuite\ConsoleIntegrationTestTrait');
