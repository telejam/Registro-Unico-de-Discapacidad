<?php

namespace App\Form;

use App\Entity\Discapacidad;
use App\Entity\ObraSocial;
use App\Entity\Padron;
use App\Entity\Persona;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PadronType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $fechaHoy = new \DateTime();
        $fechaHoy->setTimezone(new \DateTimeZone('America/Argentina/Buenos_Aires'));
        
        $builder
            ->add('cuil', IntegerType::class, [
                'label'=>'CUIL'
            ])
            ->add('cud', TextType::class, [
                'label'=>'CUD'
            ])
            ->add('cudvigencia', DateType::class, [
                'data'  => $fechaHoy,
                'label'=>'CUD Vigencia'
            ])
            ->add('cuddiagnostico', TextType::class, [
                'label'=>'CUD Diagnóstico'
            ])
            ->add('causa', TextType::class, [
                'label'=>'Causa'
            ])
            ->add('pension', TextType::class, [
                'label'=>'Pensión'
            ])
            ->add('nivelinstruccion', TextType::class, [
                'label'=>'Nivel de instrucción'
            ])
            ->add('tipomodalidad', TextType::class, [
                'label'=>'Tipo modalidad'
            ])
            ->add('experiencialaboral', TextType::class, [
                'label'=>'Experiencia laboral'
            ])
            ->add('actividades', TextType::class, [
                'label'=>'Actividades'
            ])
            ->add('niveleducacion', TextType::class, [
                'label'=>'Nivel de educación'
            ])
            ->add('residencia', TextType::class, [
                'label'=>'Residencia'
            ])
            ->add('obrasocial', EntityType::class, [
                'class' =>ObraSocial::class,
                'choice_label' =>'denominacion',
                'label'=>'Obra Social'
            ])
            ->add('discapacidad', EntityType::class, [
                'class' =>Discapacidad::class,
                'choice_label' =>'nombre',
                'label'=>'Discapacidad'
            ])
            ->add('persona', EntityType::class, [
                'class' =>Persona::class,
                'choice_label' =>'dninumero',
                'label' => 'Persona'
            ])
            ->add('Registrar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Padron::class,
        ]);
    }
}
