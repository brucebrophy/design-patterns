<?php

namespace BruceBrophy\DesignPatterns\StrategyPattern;

class App
{
    public function log($data, Logger $logger = null)
    {
        $logger = $logger ?: new LogToFile;
        $logger->log('some information');
    }
}
