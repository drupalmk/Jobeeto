<?php

namespace WSAD\JobsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;


class JobType extends AbstractType
{	
    public function buildForm(FormBuilder $builder, array $options)
    {
    	$requiredSingleLine = array('max_length' => 255, 'required' => true);
    	$requiredTextArea = array('max_length' => 4000, 'required' => true);
    	
        $builder
        	->add('category')
            ->add('type', 'choice', 
            		array(
            			'expanded' => true, 
            			'multiple' => false,
            			'choice_list' => new TypeChoices(),
            		    'required' => true,
            		)
            	  )
            ->add('company', 'text', $requiredSingleLine)
            ->add('file', 'file', array('label' => 'Logo file'))
            ->add('url', 'url')
            ->add('position','text', $requiredSingleLine)
            ->add('location', 'text', $requiredSingleLine)
            ->add('description', 'textarea', $requiredTextArea)
            ->add('how_to_apply', 'textarea', $requiredTextArea)
            ->add('is_public', null, array('required' => false, 'label' => 'Public?'))
            #->add('is_activated')
            ->add('email', 'email', $requiredSingleLine)
            #->add('slug')
            #->add('expires_at')
            #->add('created_at')
            #->add('updated_at')
        ;
    }

    public function getName()
    {
        return 'job';
    }
}
