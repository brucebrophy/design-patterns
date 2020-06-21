<?php

require __DIR__.'/vendor/autoload.php';

use BruceBrophy\DesignPatterns\AdapterPattern\Fighter;
use BruceBrophy\DesignPatterns\AdapterPattern\Wizard;
use BruceBrophy\DesignPatterns\AdapterPattern\WizardAdapter;
use BruceBrophy\DesignPatterns\DecoratorPattern\Services\EmailNotifier;
use BruceBrophy\DesignPatterns\DecoratorPattern\Services\SlackNotifier;
use BruceBrophy\DesignPatterns\DecoratorPattern\Services\SMSNotifier;
use BruceBrophy\DesignPatterns\TemplateMethodPattern\TurkeySub;
use BruceBrophy\DesignPatterns\TemplateMethodPattern\VeggieSub;

// See Decorator Pattern: https://refactoring.guru/design-patterns/decorator
(new SMSNotifier(new SlackNotifier(new EmailNotifier)))->send();

// See Adapter Pattern: https://refactoring.guru/design-patterns/adapter
echo (new Fighter)->attack();
echo (new WizardAdapter(new Wizard))->attack();

// See Template Method Pattern: https://refactoring.guru/design-patterns/template-method
(new VeggieSub)->make();
(new TurkeySub)->make();