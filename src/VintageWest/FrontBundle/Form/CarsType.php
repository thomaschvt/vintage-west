<?php

namespace VintageWest\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CarsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('year')
            ->add('kilometers')
            ->add('color')
            ->add('type')
            ->add('descriptionFr')
            ->add('descriptionEn')
            ->add('descriptionEs')
            ->add('equipements')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VintageWest\FrontBundle\Entity\Cars'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vintagewest_frontbundle_cars';
    }
}
