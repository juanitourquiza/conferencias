<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class RegistroType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', TextType::class, array(
                    'label'=>'Nombre',
                    'required'=>'Requerido',
                    'attr'=> array (
                        'class' => 'form-name form-control'
                    )
                ))
            ->add('descripcion', TextType::class, array(
                    'label'=>'Descripcion',
                    'required'=>'Requerido',
                    'attr'=> array (
                        'class' => 'form-name form-control'
                    )
                ))
            ->add('duracion', ChoiceType::class, array(
                    'label'=>'Duracion Conferencia',
                    'required'=>'Requerido',
                    'attr'=> array (
                        'class' => 'form-name form-control'
                    ),
                    'choices'  => array(
                        '5 minutos' => 5,
                        '10 minutos' => 10,
                        '15 minutos' => 15,
                        '30 minutos' => 30,
                        '45 minutos' => 45,
                        '60 minutos' => 60,
                      )
                  ))
              ->add('tematicas', null , array(
                      'label'=>'Tematicas',
                      'required'=>'Requerido',
                      'attr'=> array (
                          'class' => 'form-name form-control'
                          )
                      ))


             ->add('Enviar', SubmitType::class, array(
                    "attr" => array(
                        "class" => "form-submit btn btn-success"
                    )));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackendBundle\Entity\Conferencias'
            //'data_class' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backendbundle_conferencias';
    }


}
