<?php

namespace Lynda\MagazineBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class JobType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('company')
            ->add('logo')
            ->add('url')
            ->add('position')
            ->add('location')
            ->add('category', 'entity', array(
                'required' => TRUE,
                'class' => 'LyndaMagazineBundle:Category',
            ))
            ->add('description')
            ->add('howToApply')
            ->add('token')
            ->add('isPublic')
            ->add('isActivated')
            ->add('email')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('expiresAt')
            ->add('category')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Lynda\MagazineBundle\Entity\Job'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'lynda_magazinebundle_job';
    }
}
