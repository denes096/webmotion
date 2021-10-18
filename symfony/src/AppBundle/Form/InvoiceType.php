<?php

namespace AppBundle\Form;

use AppBundle\Entity\City;
use AppBundle\Entity\Country;
use AppBundle\Entity\Invoice;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InvoiceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('type', ChoiceType::class, [
				'choices' => array_flip(Invoice::TYPES),
				'label' => 'Típus',
			])
			->add('name', TextType::class, [
				'label' => 'Név/Cégnév',
			])
			->add('phoneNumber', IntegerType::class, [
				'label' => 'Telefonszám',
                'required' => false
			])
			->add('taxNumber', TextType::class, [
                'label' => 'Adószám',
                'required' => false
            ])
			->add('country', EntityType::class, [
                'class' => Country::class,
                'label' => 'Ország',
            ])
			->add('zipCode', IntegerType::class, [
                'label' => 'Irányítószám',
            ])
			->add('streetAndNumber', TextType::class, [
                'label' => 'Utca, házszám',
            ])
			->add('city', EntityType::class, [
                'class' => City::class,
                'label' => 'Város',
            ])
		;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Invoice'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_invoice';
    }


}
