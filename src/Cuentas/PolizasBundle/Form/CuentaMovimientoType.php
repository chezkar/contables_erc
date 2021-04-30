<?php

namespace Cuentas\PolizasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CuentaMovimientoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('movimientoDocnum')->add('movimientoFecha')->add('movimientoConcepto')->add('movimientoDebe')->add('movimientoHaber')->add('cuentaCobrarIdcuenta');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cuentas\PolizasBundle\Entity\CuentaMovimiento'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cuentas_polizasbundle_cuentamovimiento';
    }


}
