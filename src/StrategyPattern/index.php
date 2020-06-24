<?php

require __DIR__.'/../../vendor/autoload.php';

use BruceBrophy\DesignPatterns\StrategyPattern\App as LogApp;
use BruceBrophy\DesignPatterns\StrategyPattern\LogToDatabase;

// See Strategy Pattern: https://refactoring.guru/design-patterns/strategy
(new LogApp)->log('some information');
(new LogApp)->log('some information', new LogToDatabase);
