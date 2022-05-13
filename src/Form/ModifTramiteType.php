<?php

namespace App\Form;

use App\Entity\ModificacionTramite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModifTramiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fechaseguimiento')
            ->add('observacion')
            ->add('usuario')
            ->add('numeroexpediente')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ModificacionTramite::class,
        ]);
    }
}
