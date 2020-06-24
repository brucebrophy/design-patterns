<?php

require __DIR__.'/../../vendor/autoload.php';

use BruceBrophy\DesignPatterns\DecoratorPattern\Services\EmailNotifier;
use BruceBrophy\DesignPatterns\DecoratorPattern\Services\SlackNotifier;
use BruceBrophy\DesignPatterns\DecoratorPattern\Services\SMSNotifier;

// See Decorator Pattern: https://refactoring.guru/design-patterns/decorator
(new SMSNotifier(new SlackNotifier(new EmailNotifier)))->send();
