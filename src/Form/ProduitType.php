<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Famille;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('libelle', TextType::class, array(
                'label' => 'Nom du produit',
            ))

            ->add('image', FileType::class, array(
                'required' => false,
                ))
            
            ->add('pa', TextType::class, array(
                'label' => 'Prix achat',
            ))
            
            ->add('pv', TextType::class, array(
                'label' => 'Prix de vente',
            ))
            ->add('tva', TextType::class, array(
                'label' => 'TVA produit',
            ))
            ->add('stock', TextType::class, array(
                'label' => 'Stock',
            ))
            ->add('stkinit', TextType::class, array(
                'label' => 'Stock initial',
            ))

            ->add('id_famille', EntityType::class, array(
                'class' => Famille::class, 'choice_label' => 'libelle',
                'label' => 'Famille de produit'
                ))
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
