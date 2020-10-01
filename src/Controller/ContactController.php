<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();

            // Ici nous enverrons l'e-mail
            $message = (new \Swift_Message('Nouveau Contact'))
                //expediteur
            ->SetFrom($contact['email'])
                //destinataire
            ->SetTo('layoune95@gmail.com')
                //view
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig',compact('contact')
                ),
                    'text/html'
                );
            //envoyer le message
            $mailer->send($message);

            return $this->redirectToRoute('ribatour');
        }
        return $this->render('contact/index.html.twig',['contactForm' => $form->createView()]);
    }
}
