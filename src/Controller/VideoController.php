<?php

namespace App\Controller;

use App\Entity\Video;
use App\Form\StatVideoFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video")
     */
    public function index(): Response
    {
        $video = $this->getDoctrine()->getRepository(Video::class)->findAll();

        return $this->render('video/index.html.twig', [
            'videos' => $video,
        ]);
    }
    /**
     * @Route("/video/add", name="video_add")
     */
    public function video_add(Request $request)
    {
        $video = new Video();

        $form = $this->createForm(StatVideoFormType::class, $video);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($video);
            $doctrine->flush();
        }

        return $this->render('video/form.html.twig', [
            'videoForm' => $form->createView(),
        ]);
    }
}
