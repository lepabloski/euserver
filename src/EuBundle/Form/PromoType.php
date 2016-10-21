<?php

namespace EuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
//use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PromoType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('promoTitulo', TextType::class, array('label' => 'Título',
                    'attr' => array('class' => 'form-control')))
                ->add('promoDescrip', TextType::class, array('label' => 'Descripción',
                    'attr' => array('class' => 'form-control')))
                ->add('promoPrecio', NumberType::class, array('label' => 'Precio',
                    'attr' => array('class' => 'form-control')))
                ->add('promoDescuento', TextType::class, array('label' => 'Descuento',
                    'attr' => array('class' => 'form-control')))
             
                ->add('negocio', EntityType::class, array('label' => 'Negocio',
                    'class' => 'EuBundle:Negocio',
                    'attr' => array('class' => 'form-control')))
                ->add('aceptar', SubmitType::class, array('label' => 'Aceptar',
                    'attr' => array('class' => ' btn btn-success')))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'EuBundle\Entity\Promo'
        ));
    }

}
