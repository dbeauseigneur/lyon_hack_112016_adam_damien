<?php

namespace WCS\LyonGameBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use WCS\LyonGameBundle\Entity\Language;

class LanguageType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('lang')        ;
    }
    
    /**
     * {@inheritdoc}
     */
	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults(array(
			'data_class' => Language::class
		));
	}

	/**
	 * {@inheritdoc}
	 */
	public function getBlockPrefix(): string
	{
		return 'wcs_lyongamebundle_language';
	}


}
