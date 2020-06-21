<?php

namespace BruceBrophy\DesignPatterns\AdapterPattern;

class WizardAdapter
{
    protected $wizard;

    public function __construct(Wizard $wizard)
    {
        $this->wizard = $wizard;
    }

    public function attack()
    {
        return $this->wizard->castSpell();
    }

    public function defend()
    {
        return $this->wizard->shield();
    }

    public function escape()
    {
        return $this->wizard->portal();
    }
}
