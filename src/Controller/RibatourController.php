<?php

namespace App\Controller;

use App\Repository\ExcursionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
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
    public function excursions(ExcursionRepository $repository,Request $request, PaginatorInterface $paginator)
    {
        // Méthode findBy qui permet de récupérer les données
        $donnees = $repository->findAll();
        $excursions = $paginator->paginate(
            $donnees, // Requête contenant les données à paginer (ici nos articles)
            $request->query->getInt('page', 1), // Numéro de la page en cours, passé dans l'URL, 1 si aucune page
            6 // Nombre de résultats par page
        );
        return $this->render('ribatour\excursions.html.twig',[
            'excursions'=>$excursions,
        ]);
    }
    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('ribatour\about.html.twig');
    }
    /**
     * @Route("/conditions", name="conditions")
     */
    public function conditions()
    {
        return $this->render('ribatour\conditions.html.twig');
    }
    /**
     * @Route("/success", name="success")
     */
    public function success()
    {
        return $this->render('ribatour\reservation_success.html.twig');
    }



}
