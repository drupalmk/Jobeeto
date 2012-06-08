<?php

namespace WSAD\JobsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class JobType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('company')
            ->add('logo')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('description')
            ->add('how_to_apply')
            ->add('is_public')
            ->add('is_activated')
            ->add('email')
            ->add('slug')
            ->add('expires_at')
            ->add('created_at')
            ->add('updated_at')
            ->add('category')
        ;
    }

    public function getName()
    {
        return 'wsad_jobsbundle_jobtype';
    }
}
