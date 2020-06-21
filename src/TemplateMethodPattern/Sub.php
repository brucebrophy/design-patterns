<?php

namespace BruceBrophy\DesignPatterns\TemplateMethodPattern;

abstract class Sub
{
    public function make()
    {
        return $this->layBread()
            ->addLettuce()
            ->addPrimaryToppings()
            ->addSauces();
    }

    protected function layBread()
    {
        echo 'laying bread';

        return $this;
    }

    protected function addLettuce()
    {
        echo 'adding lettuce';

        return $this;
    }

    abstract protected function addPrimaryToppings();

    protected function addSauces()
    {
        echo 'adding sauces';

        return $this;
    }
}
