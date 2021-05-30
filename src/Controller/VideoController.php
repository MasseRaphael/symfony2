<?php

namespace App\Controller;

use App\Entity\Video;
use App\Form\StatVideoFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video")
     */
    public function index(): Response
    {
        return $this->render('video/index.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }
    /**
     * @Route("/video/add", name="video_add")
     */
    public function video_add()
    {
        $video = new Video();

        $form = $this->createForm(StatVideoFormType::class, $video);

        return $this->render('video/form.html.twig', [
            'videoForm' => $form->createView(),
        ]);
    }
}
