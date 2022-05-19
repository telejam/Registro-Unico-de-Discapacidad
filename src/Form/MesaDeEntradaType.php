<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MesaDeEntradaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nombre')
        ->add('apellido')
        ->add('fechanacimiento', DateType::class, ['label'=>'Fecha de Nacimiento'])
        ->add('sexo')
        ->add('estadocivil', EntityType::class, [
            'label'=>'Estado Civil',
            'class' => EstadoCivil::class,
            'choice_label' => 'tipoEstado'
        ])
        ->add('dnitipo', EntityType::class, [
            'label'=>'Tipo de Documento',
            'class' => TipoDni::class,
            'choice_label' => 'tipo'
        ])
        ->add('dnitramite', IntegerType::class, ['label'=>'Nro. de Trámite'])
        ->add('dninumero', IntegerType::class, ['label'=>'Nro. de Documento'])
        ->add('nacionalidad', EntityType::class, [
            'class' => Nacionalidad::class,
            'choice_label' => 'pais'
        ])
        ->add('provincia', EntityType::class, [
            'class' => Provincia::class,
            'choice_label' => 'nombre'
        ])
        ->add('ciudad', EntityType::class, [
            'class' => Ciudad::class,
            'choice_label' => 'nombre'
        ])
        ->add('calle')
        ->add('altura', IntegerType::class)
        ->add('piso', IntegerType::class)
        ->add('dpto')
        ->add('barrio', EntityType::class, [
            'class' => Barrio::class,
            'choice_label' => 'nombre'
        ])
        ->add('usuario', EntityType::class, [
            'class' => Usuario::class,
            'choice_label' => 'user'
        ])
        ->add('Guardar', SubmitType::class)
    ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
