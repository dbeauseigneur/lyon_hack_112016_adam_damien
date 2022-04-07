<?php

namespace WCS\LyonGameBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use WCS\LyonGameBundle\Entity\TripEnglish;

class TripEnglishType extends AbstractType
{
    /**
	 * {@inheritdoc}
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('tripName')->add('trip');
	}

	/**
	 * {@inheritdoc}
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => TripEnglish::class
		));
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix(): string
	{
		return 'wcs_lyongamebundle_tripenglish';
	}


}
