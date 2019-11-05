<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Client;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numcom')
            ->add('dateComm')
            ->add('tht')
            ->add('ttva')
            ->add('tttc')
            ->add('id_client', EntityType::class, array('class' => Client::class, 'choice_label' => 'designation'))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
