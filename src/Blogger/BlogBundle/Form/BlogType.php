<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class BlogType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('author')
            ->add('blog')
            ->add('image')
            ->add('tags')
            ->add('comments', 'collection', array(
                    'type' => new CommentType(),
                    'allow_add' => true,
                    'by_reference' => false,
                ))
                    ;
    }
    
    public function getDefaultOptions(array $options){
        return array('data_class' => 'Blogger\BlogBundle\Entity\Blog');
    }

    public function getName()
    {
        return 'blogger_blogbundle_blogtype';
    }
}
