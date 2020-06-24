<?php

require __DIR__.'/../../vendor/autoload.php';

use BruceBrophy\DesignPatterns\TemplateMethodPattern\TurkeySub;
use BruceBrophy\DesignPatterns\TemplateMethodPattern\VeggieSub;

// See Template Method Pattern: https://refactoring.guru/design-patterns/template-method
(new VeggieSub)->make();
(new TurkeySub)->make();
