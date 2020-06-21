<?php

namespace BruceBrophy\DesignPatterns\TemplateMethodPattern;

class TurkeySub extends Sub
{
	protected function addPrimaryToppings()
	{
		echo 'adding turkey';
		return $this;
	}
}