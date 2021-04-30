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
        $builder->add('clienteNit')->add('clienteNombre')->add('clienteApellido')->add('clienteNombreComercial')->add('clienteDireccionParticular')->add('clienteTelefonoParticular')->add('clienteDireccionComercial')->add('clienteTelefonoComercial')->add('activoIdactivo');
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
