<?php

namespace App\Form;

use App\Entity\Discapacidad;
use App\Entity\ObraSocial;
use App\Entity\Padron;
use App\Entity\Persona;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;


class PadronType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cuil', IntegerType::class)
            ->add('cud')
            ->add('cudvigencia')
            ->add('cuddiagnostico')
            ->add('causa')
            ->add('pension')
            ->add('nivelinstruccion')
            ->add('tipomodalidad')
            ->add('experiencialaboral')
            ->add('actividades')
            ->add('niveleducacion')
            ->add('residencia')
            ->add('obrasocial', EntityType::class, [
                'class' =>ObraSocial::class,
                'choice_label' =>'denominacion'
            ])
            ->add('discapacidad', EntityType::class, [
                'class' =>Discapacidad::class,
                'choice_label' =>'nombre'
            ])
            ->add('id', EntityType::class, [
                'class' =>Persona::class,
                'choice_label' =>'dninumero'
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
