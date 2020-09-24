<?php

namespace App\Controller;

use App\Repository\ExcursionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RibatourController extends AbstractController
{
    /**
     * @Route("/", name="ribatour")
     */
    public function index(ExcursionRepository $repository)
    {
        $excursions = $repository->findAll();
        return $this->render('ribatour\index.html.twig',[
            'excursions'=>$excursions,
        ]);
    }
    /**
     * @Route("/excursions", name="excursions")
     */
    public function excursions(ExcursionRepository $repository)
    {
        $excursions = $repository->findAll();
        return $this->render('ribatour\excursions.html.twig',[
            'excursions'=>$excursions,
        ]);
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
    /**
     * @Route("/conditions", name="conditions")
     */
    public function conditions()
    {
        return $this->render('ribatour\conditions.html.twig');
    }



}
