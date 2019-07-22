<?php

namespace App\Form;

use App\Entity\ClientDeliveryAddress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClientDeliveryAddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstName')
            ->add('lastName')
            ->add('address')
            ->add('addressComplement')
            ->add('city')
            ->add('postalCode')
            ->add('country')
            ->add('phone')
            ->add('clientAddress')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ClientDeliveryAddress::class,
        ]);
    }
}
