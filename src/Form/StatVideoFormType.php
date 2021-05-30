<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StatVideoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_video')
            ->add('title')
            ->add('author')
            ->add('date_release')
            ->add('duration_looking')
            ->add('follower_due')
            ->add('duration_view_average')
            ->add('percent_view_average')
            ->add('percent_stay_thirty_secondes')
            ->add('pike_watching')
            ->add('percent_who_finish')
            ->add('total_view')
            ->add('nb_impressions')
            ->add('percent_click')
            ->add('sorce_1')
            ->add('sorce_2')
            ->add('sorce_3')
            ->add('percent_sorce_1')
            ->add('percent_sorce_2')
            ->add('percent_sorce_3')
            ->add('percent_duration_view_no_follow')
            ->add('percent_duration_view_follow')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
