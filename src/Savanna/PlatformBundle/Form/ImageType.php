<?php
// src/Savanna/PlatformBundle/Form/ImageType.php

namespace Savanna\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('file', 'file')
    ;
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Savanna\PlatformBundle\Entity\Image'
    ));
  }

  public function getName()
  {
    return 'Savanna_platformbundle_image';
  }
}