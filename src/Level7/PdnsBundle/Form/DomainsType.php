<?php

namespace Level7\PdnsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DomainsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('master')
            ->add('lastCheck')
            ->add('type')
            ->add('notifiedSerial')
            ->add('account')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Level7\PdnsBundle\Entity\Domains'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'level7_pdnsbundle_domains';
    }
}
