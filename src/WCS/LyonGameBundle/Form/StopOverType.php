<?php

namespace WCS\LyonGameBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use WCS\LyonGameBundle\Entity\StopOver;

class StopOverType extends AbstractType
{
    /**
	 * {@inheritdoc}
	 */
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('sequence')->add('cost')->add('duration')->add('directive')->add('pointerestStart')->add('trips');
	}

	/**
	 * {@inheritdoc}
	 */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => StopOver::class
		));
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix(): string
	{
		return 'wcs_lyongamebundle_stopover';
	}


}
