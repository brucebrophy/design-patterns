<?php

namespace BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Automation;

use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Home;
use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\HomeChecker;

class Locks extends HomeChecker
{
    public function check(Home $home)
    {
        if (! $home->locked) {
            throw new \Exception('Doors are not locked');
        }

        $this->next($home);
    }
}
