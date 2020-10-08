<?php

namespace App\Controller;


use App\Entity\Excursion;
use App\Form\SearchExcursionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index(Request $request)
    {

        $excursion = new Excursion();
        $searchForm = $this->createForm(SearchExcursionType::class, $excursion);
        $searchForm->handleRequest($request);
        $excursions = [];
        if ($searchForm->isSubmitted() && $searchForm->isValid()) {
            $nom = $excursion->getNom();
            $ville = $excursion->getVille();
            if ($nom != null and $ville != null) {
                $excursions = $this->getDoctrine()->getRepository(Excursion::class)->findBy(['nom' => $nom,'ville'=>$ville]);
            } elseif ($nom != null) {
                $excursions = $this->getDoctrine()->getRepository(Excursion::class)->findBy(['nom' => $nom]);
            } elseif ($ville != null) {
            $excursions = $this->getDoctrine()->getRepository(Excursion::class)->findBy(['ville' => $ville]);
            }else {
                $excursions = $this->getDoctrine()->getRepository(Excursion::class)->findAll();
            }
        }
        return $this->render('search/index.html.twig', [
            'searchForm' => $searchForm->createView(), 'excursions' => $excursions]);
    }}


