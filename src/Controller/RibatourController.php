<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RibatourController extends AbstractController
{
    /**
     * @Route("/", name="ribatour")
     */
    public function index()
    {
        return $this->render('ribatour\index.html.twig');
    }
    /**
     * @Route("/excursions", name="excursions")
     */
    public function excursions()
    {
        return $this->render('ribatour\excursions.html.twig');
    }
    /**
     * @Route("/transferts", name="transferts")
     */
    public function transferts()
    {
        return $this->render('ribatour\transferts.html.twig');
    }
    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('ribatour\about.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('ribatour\contact.html.twig');
    }
    public function headerAction(Request $request)
    {
        return $this->render('header.html.twig');
    }

    public function footerAction(Request $request)
    {
        return $this->render('footer.html.twig');
    }
}
