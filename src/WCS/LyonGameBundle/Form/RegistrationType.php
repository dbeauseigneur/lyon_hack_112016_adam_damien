<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 10/11/16
 * Time: 12:47
 */

namespace WCS\LyonGameBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('country', null, array('label' => 'Pays'))
            ->add('city', null, array('label' => 'Ville'))
            ->add('language', null, array('label' => 'Langue'));
    }


    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function  getBlockPrefix()
    {
        return 'iti_user_registration';
    }

    public function getCountry()
    {
        return $this->getBlockPrefix();
    }

    public function getCity()
    {
        return $this->getBlockPrefix();
    }

    public function getLanguage()
    {
        return $this->getBlockPrefix();
    }

}