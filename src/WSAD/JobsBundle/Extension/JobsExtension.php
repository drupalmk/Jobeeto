<?php 
namespace WSAD\JobsBundle\Extension;

use WSAD\JobsBundle\Form\TypeChoices;

class JobsExtension extends \Twig_Extension {

    public function getFilters() 
    {
        return array(
            'formatType'  => new \Twig_Filter_Method($this, 'getTypeNameByKey'),
        );
    }
    
    public function getTypeNameByKey($key) 
    {
    	$choices = TypeChoices::$choices;
    	return $choices[$key];
    }

    public function getName()
    {
        return 'jobs_extension';
    }
}
