<?php

namespace Juanes\sipaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class RegistrovisitasType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fecha', DateType::class )
            ->add('archivo')
            ->add('jumreguse')
            ->add('jumregfli')
            ->add('archivo', FileType::class,array("label" => "archivo:", "attr" =>array("class" => "form-control")));
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Juanes\sipaBundle\Entity\Registrovisitas'
        ));
    }
}
