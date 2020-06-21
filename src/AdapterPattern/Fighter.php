<?php

namespace BruceBrophy\DesignPatterns\AdapterPattern;

class Fighter
{
    public function attack()
    {
        return 'Fighter swings sword';
    }

    public function defend()
    {
        return 'Fighter parries attack';
    }

    public function escape()
    {
        return 'Fighter runs away';
    }
}
