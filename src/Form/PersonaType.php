<?php

namespace App\Form;

use App\Entity\Barrio;
use App\Entity\Ciudad;
use App\Entity\Provincia;
use App\Entity\EstadoCivil;
use App\Entity\Nacionalidad;
use App\Entity\Persona;
use App\Entity\TipoDni;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
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
            ->add('fechanacimiento', DateType::class, [
                'label'=>'Fecha de Nacimiento',
                'widget'=>'single_text',
                'years'=>range(1990, 'Now' )])
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
            ->add('discapacidad', CheckboxType::class,[
                'mapped' => false,
                'required'=>false,
                'label'=>'¿Tiene una discapacidad?'
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
