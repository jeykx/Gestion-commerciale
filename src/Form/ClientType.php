<?php

namespace App\Form;

use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('designation', TextType::class, array(
                'label' => 'Désignation'
            ))
            ->add('RespComm', TextType::class, array(
                'label' => 'Responsable commerciale'
            ))
            ->add('Respfinance', TextType::class, array(
                'label' => 'Responsable financier'
            ))
            ->add('addlivr', TextType::class, array(
                'label' => 'Adresse de livraison'
            ))
            ->add('addfacture', TextType::class, array(
                'label' => 'Adresse de facturation'
            ))
            ->add('tel', TextType::class, array(
                'label' => 'Numéro de téléphone'
            ))
            ->add('portable', TextType::class, array(
                'label' => 'Numéro de portable'
            ))
            ->add('fax', TextType::class, array(
                'label' => 'Fax'
            ))
            ->add('email', TextType::class, array(
                'label' => 'Adresse email'
            ))
            ->add('soldeinit')
            ->add('solde')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Client::class,
        ]);
    }
}
