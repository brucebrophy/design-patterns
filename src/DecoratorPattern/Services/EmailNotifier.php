<?php

namespace BruceBrophy\DesignPatterns\DecoratorPattern\Services;

use BruceBrophy\DesignPatterns\DecoratorPattern\Notifier;

class EmailNotifier implements Notifier
{
    public function send()
    {
        file_put_contents(__DIR__.'/../notification.log', "Email Notification \n", FILE_APPEND);
    }
}
