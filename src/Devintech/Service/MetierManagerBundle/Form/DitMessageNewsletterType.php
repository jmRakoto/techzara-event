<?php

namespace App\Devintech\Service\MetierManagerBundle\Form;

use Koff\Bundle\I18nFormBundle\Form\Type\TranslationsType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class DitMessageNewsletterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('translations', TranslationsType::class, [
                'label'  => false,
                'fields' => [
                    'messageNewsletterTitle' => [
                        'field_type' => TextType::class,
                        'label'      => 'title.',
                        'locale_options' => [
                            'en' => ['label' => 'Title'],
                            'fr' => ['label' => 'Titre']
                        ]
                    ],
                    'messageNewsletterContent' => [
                        'field_type' => TextareaType::class,
                        'label'      => 'content.',
                        'locale_options' => [
                            'en' => ['label' => 'Content'],
                            'fr' => ['label' => 'Contenu']
                        ]
                    ]
                ],
            ])
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\Devintech\Service\MetierManagerBundle\Entity\DitMessageNewsletter'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'dit_service_metiermanagerbundle_message_newsletter';
    }
}
