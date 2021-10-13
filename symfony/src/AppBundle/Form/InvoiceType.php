<?php

namespace AppBundle\Form;

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
				'choices' => [
					'Magánszemély' => '0',
					'Cég' => '1'
				],
				'label' => 'Típus'
			])
			->add('name', TextType::class, [
				'label' => 'Név/Cégnév'
			])
			->add('phoneNumber', IntegerType::class, [
				'label' => 'Telefonszám'
			])
			->add('taxNumber')
			->add('country')
			->add('zipCode')
			->add('streetAndNumber')
			->add('city')
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
