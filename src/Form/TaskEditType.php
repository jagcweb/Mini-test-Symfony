<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TaskEditType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->setMethod('POST')
        ->add('title', TextType::class, [
            'label' => "Title"
        ])
        ->add('description', TextareaType::class, [
            'label' => "Description"
        ])
        ->add('priority', ChoiceType::class, [
            'label' => "Priority",
            'choices' => array(
                'high' => 'high',
                'medium' => 'medium',
                'low' => 'low'
            )
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Edit Task'
        ]); //Sin el get form

    }

}