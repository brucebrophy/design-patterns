<?php

require __DIR__.'/../../vendor/autoload.php';

use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Home;
use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Automation\Alarm;
use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Automation\Lights;
use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Automation\Locks;

// See Chain of Responsibility Pattern: https://refactoring.guru/design-patterns/chain-of-responsibility
$home = new Home;

$alarm = new Alarm;
$lights = new Lights;
$locks = new Locks;

$alarm->succeedWith($lights);
$lights->succeedWith($locks);

try {
	$alarm->check($home);
} catch (\Exception $e) {
	var_dump($e->getMessage());
}