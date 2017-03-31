<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use AppBundle\Entity\Piecejointe;
use AppBundle\Form\PiecejointeType;

class DocumentType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('reference', TextType::class, array(
                'attr'  => array(
                    'class' => 'form-control',
                    'autocomplete'  => 'off'
                )
          ))
            ->add('resume', TextareaType::class, array(
                'attr'  => array(
                    'class' => 'form-control'
                ),
                'required' => false
          ))
            ->add('motcle', TextareaType::class, array(
                'attr'  => array(
                    'class' => 'form-control'
                ),
                'required' => false
          ))
            ->add('dateprod', TextType::class, array(
                'attr'  => array(
                    'class' => 'form-control',
                    'autocomplete'  => 'off'
                ),
                'required' => false
          ))
            ->add('producteur', TextType::class, array(
                'attr'  => array(
                    'class' => 'form-control',
                    'autocomplete'  => 'off'
                ),
                'required' => false
          ))
            //->add('statut')
            //->add('publiePar')->add('modifiePar')->add('publieLe')->add('modifieLe')
            ->add('definitive', null, array(
                  'attr'  => array(
                      'class' => 'form-control select-definitive',
                      'autocomplete'  => 'off'
                  )
            ))
            ->add('piecejointe', PiecejointeType::class)
            ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Document'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_document';
    }


}
