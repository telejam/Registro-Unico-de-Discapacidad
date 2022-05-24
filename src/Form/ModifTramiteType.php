<?php

namespace App\Form;

use App\Entity\ModificacionTramite;
use App\Entity\Tramite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModifTramiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fechaseguimiento', DateType::class, ['label'=>'Fecha de seguimiento'])
            ->add('observacion')
            // ->add('usuario')
            ->add('numeroexpediente', EntityType::class, [
                'class' =>Tramite::class,
                'choice_label' =>'numeroExpediente',
                'label'=>'Numero de expediente'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ModificacionTramite::class,
        ]);
    }
}
