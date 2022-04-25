<?php

namespace App\Form;

use App\Entity\Padron;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PadronType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('cuil')
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
            ->add('obrasocial')
            ->add('discapacidad')
            ->add('id')
            ->add('idresponsable')
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
