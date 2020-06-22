<?php

namespace BruceBrophy\DesignPatterns\StrategyPattern;

class LogToFile implements Logger
{
    public function log($data)
    {
        var_dump('Log to file');
    }
}
