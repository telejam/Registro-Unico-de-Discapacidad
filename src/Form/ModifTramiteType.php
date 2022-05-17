<?php

namespace App\Form;

use App\Entity\ModificacionTramite;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModifTramiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fechaseguimiento', DateType::class, [
                'label'=>'Fecha de seguimiento'
            ])
            ->add('observacion')
            ->add('usuario')
            ->add('numeroexpediente', IntegerType::class, [
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
