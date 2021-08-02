<?php

namespace App\Form;

use App\Entity\Cliente;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {       
        $builder
            ->add('nombre',     TextType::class,    ['attr' => ['class' => 'form-control mb-3']])            
            ->add('rut',        TextType::class,    ['attr' => ['class' => 'form-control mb-3']])            
            ->add('aPaterno',   TextType::class,    ['label' =>'Apellido Paterno','attr' => ['class' => 'form-control mb-3']])            
            ->add('aMaterno',   TextType::class,    ['label' =>'Apellido Materno','attr' => ['class' => 'form-control mb-3']])            
            ->add('email',      EmailType::class,   ['label' =>'Correo','attr' => ['class' => 'form-control mb-3']])            
            ->add('telefono',   IntegerType::class, ['label' =>'Teléfono','attr' => ['class' => 'form-control mb-3']])            
            //->add('agregar',    SubmitType::class,  ['label' => 'Agregar (+)','attr' => ['class' => 'btn btn-primary']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cliente::class,
        ]);
    }
}
