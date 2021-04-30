<?php

namespace Cuentas\PolizasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clienteNit', null, ['label' => 'NIT', 'attr' => ['class' => 'form-control form-control-user']])
            ->add('clienteNombre', null, ['label' => 'Nombres', 'attr' => ['class' => 'form-control form-control-user']])
            ->add('clienteApellido', null, ['label' => 'Apellidos', 'attr' => ['class' => 'form-control form-control-user']])
            ->add('clienteNombreComercial', null, ['label' => 'Nombre Comercial', 'attr' => ['class' => 'form-control form-control-user']])
            ->add('clienteDireccionParticular', null, ['label' => 'Dirección Residencia', 'attr' => ['class' => 'form-control form-control-user']])
            ->add('clienteTelefonoParticular', null, ['label' => 'Celular', 'attr' => ['class' => 'form-control form-control-user']])
            ->add('clienteDireccionComercial', null, ['label' => 'Dirección Comercial', 'attr' => ['class' => 'form-control form-control-user']])
            ->add('clienteTelefonoComercial', null, ['label' => 'PBX', 'attr' => ['class' => 'form-control form-control-user']])
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cuentas\PolizasBundle\Entity\Cliente'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cuentas_polizasbundle_cliente';
    }


}
