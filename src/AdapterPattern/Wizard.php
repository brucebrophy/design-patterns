<?php

namespace BruceBrophy\DesignPatterns\AdapterPattern;

class Wizard
{
	public function castSpell()
	{
		return 'Wizard casts magic missile';
	}

	public function shield()
	{
		return 'Wizard casts shield spell';
	}

	public function portal()
	{
		return 'Wizard creates magic portal';
	}
}