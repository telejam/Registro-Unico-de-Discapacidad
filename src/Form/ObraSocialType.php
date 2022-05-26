<?php

namespace App\Form;

use App\Entity\ObraSocial;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ObraSocialType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('denominacion', TextType::class, [
                'label'=>'Denominación'
            ])
            ->add('nombre')
            ->add('domicilio')
            ->add('observacion', TextType::class, [
                'label'=>'Observación'
            ])
            ->add('telefononumero', TelType::class, [
                'label'=>'Numero de Teléfono'
            ])
            ->add('vigente')
            ->add('Guardar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ObraSocial::class,
        ]);
    }
}
