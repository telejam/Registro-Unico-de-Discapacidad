<?php

namespace App\Form;

use App\Entity\EstadoCivil;
use App\Entity\Nacionalidad;
use App\Entity\Persona;
use App\Entity\TipoDni;
use App\Entity\Usuario;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PersonaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre')
            ->add('apellido')
            ->add('fechanacimiento', DateType::class)
            ->add('sexo')
            ->add('estadocivil', EntityType::class, [
                'class' => EstadoCivil::class,
                'choice_label' => 'tipoEstado'
            ])
            ->add('dnitipo', EntityType::class, [
                'class' => TipoDni::class,
                'choice_label' => 'tipo'
            ])
            ->add('dnitramite', IntegerType::class)
            ->add('dninumero', IntegerType::class)
            ->add('nacionalidad', EntityType::class, [
                'class' => Nacionalidad::class,
                'choice_label' => 'pais'
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
            'data_class' => Persona::class,
        ]);
    }
}