<?php

namespace App\Form;

use App\Entity\ModificacionTramite;
use App\Entity\Usuario;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModifTramiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $fechaHoy = new \DateTime();
        $fechaHoy->setTimezone(new \DateTimeZone('America/Argentina/Buenos_Aires'));
        
        $builder
            ->add('fechaseguimiento', DateType::class, [ 
                'data'  => $fechaHoy,
                'label'=>'Fecha de seguimiento'
            ])
            ->add('observacion', TextType::class, [
                'label'=>'Observación'
            ])
            ->add('Finalizar', CheckboxType::class, [
                'mapped' => false,
                'required'=>false,
            ])
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
