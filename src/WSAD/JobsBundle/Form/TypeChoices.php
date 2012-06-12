<?php
namespace WSAD\JobsBundle\Form;

use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceListInterface;


class TypeChoices implements ChoiceListInterface {
	
	public static $choices = array(
		'full-time' => 'Full time',	
		'part-time' => 'Part time',	
		'freelance'  => 'Freelance',
	);
	
	public static function getChoiceNameByValue($value)
	{
		return self::$choices[$value];
	}

	public function getChoices() {
		
		return self::$choices;
		
	}	
}