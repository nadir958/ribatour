<?php

namespace App\Controller;

use App\Entity\Excursionreguliere;
use App\Form\ExcursionreguliereType;
use App\Form\ReservationType;
use App\Repository\ExcursionreguliereRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/excursionreguliere")
 */
class ExcursionreguliereController extends AbstractController
{
    /**
     * @Route("/", name="excursionreguliere_index", methods={"GET"})
     */
    public function index(ExcursionreguliereRepository $excursionreguliereRepository): Response
    {
        return $this->render('excursionreguliere/index.html.twig', [
            'excursionregulieres' => $excursionreguliereRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="excursionreguliere_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $excursionreguliere = new Excursionreguliere();
        $form = $this->createForm(ExcursionreguliereType::class, $excursionreguliere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($excursionreguliere);
            $entityManager->flush();

            return $this->redirectToRoute('excursionreguliere_index');
        }

        return $this->render('excursionreguliere/new.html.twig', [
            'excursionreguliere' => $excursionreguliere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="excursionreguliere_show", methods={"GET","POST"})
     */
    public function show(Excursionreguliere $excursionreguliere,Request $request, \Swift_Mailer $mailer): Response
    {
        $form = $this->createForm(ReservationType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation = $form->getData();

            // Ici nous enverrons l'e-mail
            $message = (new \Swift_Message('Nouvelle Reservation'))
                //expediteur
                ->SetFrom($reservation['email'])
                //destinataire
                ->SetTo('layoune95@gmail.com')
                //view
                ->setBody(
                    $this->renderView(
                        'emails/reservationreguliere.html.twig',compact('reservation','excursionreguliere')
                    ),
                    'text/html'
                );
            //envoyer le message
            $mailer->send($message);

            return $this->redirectToRoute('success');
        }
        return $this->render('excursionreguliere/show.html.twig',['reservationForm' => $form->createView(),'excursionreguliere' => $excursionreguliere,]);
    }

    /**
     * @Route("/{id}/edit", name="excursionreguliere_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Excursionreguliere $excursionreguliere): Response
    {
        $form = $this->createForm(ExcursionreguliereType::class, $excursionreguliere);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('excursionreguliere_index');
        }

        return $this->render('excursionreguliere/edit.html.twig', [
            'excursionreguliere' => $excursionreguliere,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="excursionreguliere_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Excursionreguliere $excursionreguliere): Response
    {
        if ($this->isCsrfTokenValid('delete'.$excursionreguliere->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($excursionreguliere);
            $entityManager->flush();
        }

        return $this->redirectToRoute('excursionreguliere_index');
    }
}
