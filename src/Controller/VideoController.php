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
     * @Route("/video", name="video", methods={"GET"})
     */
    public function index(): Response
    {
        $video = $this->getDoctrine()->getRepository(Video::class)->findAll();

        return $this->render('video/index.html.twig', [
            'videos' => $video,
        ]);
    }
    /**
     * @Route("/video/add", name="video_add", methods={"GET","POST"})
     */
    public function video_add(Request $request): Response
    {
        $video = new Video();

        $form = $this->createForm(StatVideoFormType::class, $video);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($video);
            $doctrine->flush();
            return $this->redirectToRoute('video');
        }

        return $this->render('video/form.html.twig', [
            'videoForm' => $form->createView(),
        ]);
    }
    /**
     * @Route("/video/{id}", name="video_show", methods={"GET"})
     */
    public function video_show(Video $video): Response
    {

        return $this->render('video/video.html.twig', [
            'video' => $video,
        ]);
    }
    /**
     * @Route("/video/{id}/edit", name="video_edit", methods={"GET","POST"})
     */
    public function video_edit(Request $request, Video $video): Response
    {
        $form = $this->createForm(StatVideoFormType::class, $video);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('video');
        }

        return $this->render('video/edit.html.twig', [
            'video' => $video,
            'videoForm' => $form->createView(),
        ]);
    }
    /**
     * @Route("/video/{id}", name="video_delete", methods={"DELETE"})
     */
    public function video_delete(Request $request, Video $video): Response
    {

        if ($this->isCsrfTokenValid('delete'.$video->getId(), $request->request->get('_token'))) {
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->remove($video);
            $doctrine->flush();
        }

        return $this->redirectToRoute('video');
    }
}
