<?php

namespace BruceBrophy\DesignPatterns\DecoratorPattern\Services;

use BruceBrophy\DesignPatterns\DecoratorPattern\Notifier;

class SMSNotifier implements Notifier
{
	protected $notifier;

	public function __construct(Notifier $notifier)
	{
		$this->notifier = $notifier;
	}

	public function send()
	{
		$this->notifier->send();
		file_put_contents(__DIR__ . '/../notification.log', "SMS Notification \n", FILE_APPEND);
	}
}