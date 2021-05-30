<?php

namespace App\Controller;

use App\Entity\UberEat;
use App\Form\UberEatFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UberEatController extends AbstractController
{
    /**
     * @Route("/ubereat", name="ubereat", methods={"GET"})
     */
    public function index(): Response
    {
        $uberEat = $this->getDoctrine()->getRepository(UberEat::class)->findAll();

        return $this->render('uber_eat/index.html.twig', [
            'list' => $uberEat,
        ]);
    }
    /**
     * @Route("/ubereat/command, name="ubereat_command", methods={"GET","POST"})
     */
    public function ubereat_command(Request $request): Response
    {
        $uberEat = new UberEat();

        $form = $this->createForm(UberEatFormType::class, $uberEat);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $doctrine = $this->getDoctrine()->getManager();
            $doctrine->persist($uberEat);
            $doctrine->flush();
            return $this->redirectToRoute('ubereat');
        }

        return $this->render('uber_eat/command.html.twig', [
            'commandForm' => $form->createView(),
        ]);
    }
    /**
     * @Route("/ubereat/{id}", name="ubereat_show", methods={"GET"})
     */
    public function video_show(UberEat $uberEat): Response
    {

        return $this->render('uber_eat/show.html.twig', [
            'uberEat' => $uberEat,
        ]);
    }
}
