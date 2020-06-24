<?php

namespace BruceBrophy\DesignPatterns\ChainOfResponsibilityPattern;

abstract class HomeChecker
{
	protected $successor;

	public abstract function check(Home $home);

	public function succeedWith(HomeChecker $successor)
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