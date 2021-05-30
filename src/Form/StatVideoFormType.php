<?php

namespace App\Form;

use App\Entity\Video;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StatVideoFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id_video', TextType::class, [
                'label' => 'Id de la Vidéo'
            ])
            ->add('title', TextType::class, [
                'label' => 'Titre'
            ])
            ->add('author')
            ->add('date_release', DateType::class , [
                'label' => 'Date de sortie'
            ])
            ->add('duration_looking', TextType::class, [
                'label' => 'Durée de visionnage(heures)'
            ])
            ->add('follower_due', TextType::class, [
                'label' => 'Gain d\'abonnés'
            ])
            ->add('duration_view_average', TextType::class, [
                'label' => 'Durée moyenne de visionnage'
            ])
            ->add('percent_view_average', TextType::class, [
                'label' => 'Pourcentage moyen de visionnage'
            ])
            ->add('percent_stay_thirty_secondes', TextType::class, [
                'label' => 'Pourcentage restés après 30 s'
            ])
            ->add('pike_watching', TextType::class, [
                'label' => 'Pic de visionnage à :'
            ])
            ->add('percent_who_finish', TextType::class, [
                'label' => 'Pourcentage qui finissent la vidéo'
            ])
            ->add('total_view', TextType::class, [
                'label' => 'Total de vue'
            ])
            ->add('nb_impressions', TextType::class, [
                'label' => 'Nombres impressions'
            ])
            ->add('percent_click', TextType::class, [
                'label' => 'Taux de clics en Pourcentage'
            ])
            ->add('sorce_1')
            ->add('sorce_2')
            ->add('sorce_3')
            ->add('percent_sorce_1', TextType::class, [
                'label' => 'Pourcentage de la source 1'
            ])
            ->add('percent_sorce_2', TextType::class, [
                'label' => 'Pourcentage de la source 2'
            ])
            ->add('percent_sorce_3', TextType::class, [
                'label' => 'Pourcentage de la source 3'
            ])
            ->add('percent_duration_view_no_follow', TextType::class, [
                'label' => 'Pourcentage de la durée visionnage des non abonnés'
            ])
            ->add('percent_duration_view_follow', TextType::class, [
                'label' => 'Pourcentage de la durée visionnage des abonnés'
            ])
            ->add('Envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
