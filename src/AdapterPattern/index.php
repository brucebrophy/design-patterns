<?php

require __DIR__.'/../../vendor/autoload.php';

use BruceBrophy\DesignPatterns\AdapterPattern\Fighter;
use BruceBrophy\DesignPatterns\AdapterPattern\Wizard;
use BruceBrophy\DesignPatterns\AdapterPattern\WizardAdapter;

// See Adapter Pattern: https://refactoring.guru/design-patterns/adapter
echo (new Fighter)->attack();
echo (new WizardAdapter(new Wizard))->attack();