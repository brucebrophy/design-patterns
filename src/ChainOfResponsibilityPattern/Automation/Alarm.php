<?php

namespace BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Automation;

use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Home;
use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\HomeChecker;

class Alarm extends HomeChecker
{
    public function check(Home $home)
    {
        if (! $home->alarmOn) {
            throw new \Exception('Alarm is not set');
        }

        $this->next($home);
    }
}
