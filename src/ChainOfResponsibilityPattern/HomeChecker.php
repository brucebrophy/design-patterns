<?php

namespace BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern;

abstract class HomeChecker
{
    protected $successor;

    abstract public function check(Home $home);

    public function succeedWith(self $successor)
    {
        $this->successor = $successor;
    }

    public function next(Home $home)
    {
        if ($this->successor) {
            return $this->successor->check($home);
        }
    }
}
