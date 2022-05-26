<?php

namespace App\Form;

use App\Entity\ModificacionTramite;
use App\Entity\Tramite;
use App\Entity\Usuario;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;

class ModifTramiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('numeroexpediente', EntityType::class, [
                'class' =>Tramite::class,
                'choice_label' =>'numeroExpediente',
                'label'=>'Numero de expediente'
            ])
            ->add('fechaseguimiento', DateType::class, ['label'=>'Fecha de seguimiento'])
            ->add('observacion', TextType::class, [
                'label'=>'Observación'
            ])
            ->add('usuario', EntityType::class, [
                'class' =>Usuario::class,
                'choice_label' =>'user'
            ])
            // ->add('Finalizar', CheckboxType::class, [
            //     'mapped' => false,
            //     'constraints'=>[
            //         new IsTrue([
            //             'message'=> 'Finalizar tramite'
            //         ])
            //     ]
            // ])
            ->add('Guardar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ModificacionTramite::class,
        ]);
    }
}
