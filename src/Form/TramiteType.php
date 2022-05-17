<?php

namespace App\Form;

use App\Entity\EstadoTramite;
use App\Entity\Persona;
use App\Entity\TipoTramite;
use App\Entity\Tramite;
use App\Entity\Usuario;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TramiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('fechainicio', DateType::class, ['label'=>'Fecha de Inicio'])
            ->add('observacion')
            //->add('fecharesolucion', DateType::class)
            ->add('persona',EntityType::class, [
                'class' =>Persona::class,
                'choice_label' =>'dniNumero'
            ])
            ->add('usuario', EntityType::class, [
                'class' =>Usuario::class,
                'choice_label' =>'user'
            ])
            ->add('estadotramite',EntityType::class, [
                'class' =>EstadoTramite::class,
                'choice_label' =>'estado',
                'label'=>'Estado del tramite'
            ])
            ->add('tipotramite', EntityType::class, [
                'class' =>TipoTramite::class,
                'choice_label' =>'nombre',
                'label'=>'Tipo de tramite'
            ])
            ->add('Registrar', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tramite::class,
        ]);
    }
}
