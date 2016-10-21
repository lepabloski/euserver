<?php

namespace EuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class NegocioType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('negocioNombre', TextType::class, array('label' => 'Nombre',
                    'attr' => array('class' => 'form-control')))
                ->add('negocioDomicilio', TextType::class, array('label' => 'Domicilio',
                    'attr' => array('class' => 'form-control')))
                ->add('negocioTelefono', TextType::class, array('label' => 'Teléfono',
                    'attr' => array('class' => 'form-control')))
                ->add('negocioCelular', TextType::class, array('label' => 'Celular',
                    'attr' => array('class' => 'form-control')))
                ->add('negocioEmail', EmailType::class, array('label' => 'Email',
                    'attr' => array('class' => 'form-control')))
                ->add('negocioNomDuenio', TextType::class, array('label' => 'Nombre del Dueño',
                    'attr' => array('class' => 'form-control')))
                ->add('negocioGpsLatitud', TextType::class, array('label' => 'Latitud',
                    'attr' => array('class' => 'form-control')))
                ->add('negocioGpsLongitud', TextType::class, array('label' => 'Longitud',
                    'attr' => array('class' => 'form-control')))
//            ->add('negocioFoto')
//            ->add('negocioFecRegistro', 'date')
//            ->add('usuCreaId')
//            ->add('negocioFecMod', 'datetime')
//            ->add('negocioAlta')
//            ->add('negocioSucu')
                ->add('ciudad', EntityType::class, array(
                    'class' => 'EuBundle:Ciudad',
                    'label' => 'Ciudad',
                    'attr' => array('class' => 'form-control')
                ))
                ->add('aceptar', SubmitType::class, array('label' => 'Aceptar',
                    'attr' => array('class' => ' btn btn-success')))

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'EuBundle\Entity\Negocio'
        ));
    }

}
