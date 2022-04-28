<?php

namespace App\Form;

use App\Entity\Discapacidad;
use App\Entity\TipoDiscapacidad;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DiscapacidadType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('vigente')
            ->add('tipo', EntityType::class, [
                'class' =>TipoDiscapacidad::class,
                'choice_label' =>'nombre'
            ])
            ->add('Guardar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Discapacidad::class,
        ]);
    }
}
