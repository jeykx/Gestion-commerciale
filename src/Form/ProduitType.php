<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Famille;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class, array(
                'attr' => array('class' => 'form-control'),
            ))
            
            ->add('pa', TextType::class, array(
                'attr' => array('class' => 'form-control'),
            ))
            
            ->add('pv', TextType::class, array(
                'attr' => array('class' => 'form-control'),
            ))
            ->add('tva', TextType::class, array(
                'attr' => array('class' => 'form-control'),
            ))
            ->add('stock', TextType::class, array(
                'attr' => array('class' => 'form-control'),
            ))
            ->add('stkinit', TextType::class, array(
                'attr' => array('class' => 'form-control'),
            ))
            ->add('stkal', TextType::class, array(
                'attr' => array('class' => 'form-control'),
            ))
            ->add('id_famille', EntityType::class, array(
                'class' => Famille::class, 'choice_label' => 'libelle')
            )
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
