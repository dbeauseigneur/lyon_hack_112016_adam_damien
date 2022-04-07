<?php

namespace WCS\LyonGameBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use WCS\LyonGameBundle\Entity\Trip;

class TripType extends AbstractType
{
    /**
	 * {@inheritdoc}
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('cost')->add('duration')->add('slug')->add('users');
	}

	/**
	 * {@inheritdoc}
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Trip::class
		));
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix(): string
	{
		return 'wcs_lyongamebundle_trip';
	}


}
