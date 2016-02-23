<?php

namespace uniVideojuegos\Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class juegosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('puntuacion')
            ->add('juetip')
            ->add('jueplat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'uniVideojuegos\Bundle\Entity\juegos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'univideojuegos_bundle_juegos';
    }
}
