<?php
namespace App\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class accueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        include ('article_tab');
        return $this->render('accueil.html.twig', [
            'article' => $articles]);

    }

    /**
     * @Route("/accueil/articles/{id}", name="articles")
     */
    public function blog($id)
    {

        include ('article_tab');


        $article = $articles[$id];

        return $this->render('articles.html.twig', [
            'article' => $article
        ]);
    }

}