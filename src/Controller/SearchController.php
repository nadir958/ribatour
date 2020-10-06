<?php

namespace App\Controller;


use App\Form\SearchExcursionType;
use App\Repository\ExcursionRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index(Request $request, ExcursionRepository $repo, PaginatorInterface $paginator) {

        $searchForm = $this->createForm(SearchExcursionType::class);
        $searchForm->handleRequest($request);

        $data = $repo->findAll();

        if ($searchForm->isSubmitted() && $searchForm->isValid()) {

            $nom = $searchForm->getData()->getNom();

            $data = $repo->search($nom);


            if ($data == null) {
                $this->addFlash('erreur', 'Aucun article contenant ce mot clé dans le titre n\'a été trouvé, essayez en un autre.');

            }

        }

        // Paginate the results of the query
        $excursions = $paginator->paginate(
        // Doctrine Query, not results
            $data,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );

        return $this->render('search/index.html.twig',[
            'excursions' => $excursions,
            'searchForm' => $searchForm->createView()
        ]);
    }
}
