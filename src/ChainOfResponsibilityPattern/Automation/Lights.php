<?php

namespace BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Automation;

use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\Home;
use BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern\HomeChecker;

class Lights extends HomeChecker
{
	public function check(Home $home)
	{
		if ( ! $home->lightsOff) {
			throw new \Exception('Lights are not on');
		}

		$this->next($home);
	}
}