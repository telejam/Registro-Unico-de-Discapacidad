<?php

namespace App\Form;

use App\Entity\Padron;
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
            ->add('cuil', type: IntegerType::class)
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
            ->add('obrasocial', type: IntegerType::class)
            ->add('discapacidad', type: IntegerType::class)
            // ->add('id')
            // ->add('idresponsable')
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
