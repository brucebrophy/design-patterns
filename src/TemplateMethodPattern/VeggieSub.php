<?php

namespace BruceBrophy\DesignPatterns\TemplateMethodPattern;

class VeggieSub extends Sub
{
    protected function addPrimaryToppings()
    {
        echo 'adding veggies';

        return $this;
    }
}
