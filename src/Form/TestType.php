<?php

namespace App\Form;

use App\Entity\Test;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('date' ,null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('description' , null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('image', null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('Capacity', null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('contact', null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('phone', null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('address', null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('url', null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
            ->add('Type', null , array("attr"=>["class"=>"form-control mb-2 myinput"]))
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Test::class,
        ]);
    }
}
