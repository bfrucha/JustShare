<?php

namespace JustShare\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;


class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date',        'date')
            ->add('titre',       'text')
            ->add('auteur',      'text')
            ->add('contenu',     'textarea')
			->add('image',       new ImageType())
			->add('categories',  'entity', array('class' => 'JustShareCoreBundle:Categorie',
			                                     'property' => 'nom',
			                                     'multiple' => true))
			;

		$factory = $builder->getFormFactory();
		
		$builder->addEventListener(
			FormEvents::PRE_SET_DATA,
			function(FormEvent $event) use ($factory) {
				$article = $event->getData();

				if($article === null) { 
					return;
				}

				if($article->getPublication() === false) {
					$event->getForm()->add(
						$factory->createNamed('publication', 'checkbox', null, array('required' => false, 'auto_initialize' => false))
					);
				} else {
					$event->getForm()->remove('publication');
				}
			});
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'JustShare\CoreBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'justshare_testbundle_article';
    }
}
