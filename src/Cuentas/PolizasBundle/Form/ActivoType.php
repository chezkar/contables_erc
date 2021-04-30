<?php

namespace Cuentas\PolizasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Doctrine\ORM\EntityRepository;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Symfony\Component\Form\CallbackTransformer;


class ActivoType extends AbstractType
{
    private $id;

    public function __construct()
    {
        $this->id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->id = $options['idcliente'];

        $builder
            ->add('activoTipo', CollectionType::class, ['entry_type' => TextType::class, 'allow_add' => true, 'allow_delete' =>true])
            ->add('activoTipoCategoria')
            ->add('activoTipoSubcategoria')
            ->add('activoNombre')
            ->add('activoCaracteristica')
            ->add('activoValor')
            ->add('clienteIdcliente', EntityType::class, ['class' => 'PolizasBundle:Cliente',
                'required' => true,
                'query_builder' => function(EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.idcliente = ?1')
                        ->setParameter(1, $this->id);
            }])
        ;

        $builder->get('activoTipo')
            ->addModelTransformer(new CallbackTransformer(
                function ($labelsAsString) {
                    return explode(', ', $labelsAsString);
                },
                function ($labelsAsArray) {
                    return implode(', ', $labelsAsArray);
                }
            ))
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cuentas\PolizasBundle\Entity\Activo'
        ));
        $resolver->setRequired('idcliente');
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'cuentas_polizasbundle_activo';
    }

    /**
     * @param mixed $value
     * @return array
     */
    public function reverseTransform($value)
    {
        if (is_array($value)) {
            return implode(',', $value);
        }
        return $value;
    }


}
