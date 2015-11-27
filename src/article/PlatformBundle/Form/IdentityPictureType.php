<?php

namespace article\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class IdentityPictureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('file')
        ;
    }
    public function getName()
    {
        return 'article_PlatformBundle_identitypicturetype';
    }
}
