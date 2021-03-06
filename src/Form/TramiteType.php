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
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TramiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $fechaHoy = new \DateTime();
        $fechaHoy->setTimezone(new \DateTimeZone('America/Argentina/Buenos_Aires'));

        $builder
            ->add('numeroexpediente', IntegerType::class, [
                'label'=>'Numero de expediente'
            ])
            ->add('fechainicio', DateType::class, [
                'data'  => $fechaHoy,
                'label'=>'Fecha de inicio'
            ])
            ->add('tipotramite', EntityType::class, [
                'class' =>TipoTramite::class,
                'choice_label' =>'nombre',
                'label'=>'Tipo de tramite'
            ])
            ->add('observacion', TextType::class, [
                'label'=>'Observación'
            ])
            ->add('estadotramite',EntityType::class, [
                'class' =>EstadoTramite::class,
                'choice_label' =>'estado',
                'label'=>'Estado del tramite'
            ])
            ->add('persona',EntityType::class, [
                'class' =>Persona::class,
                'choice_label' =>'dniNumero',
                'label'=>'DNI'
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
