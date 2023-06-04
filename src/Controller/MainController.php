<?php
namespace App\Controller;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;


class MainController extends AbstractController
{
    /**
     * @Route("/",name="home")
     */
    public function home(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $article =new Article();
        $article->setNom('le nom');
        $article->setMarque('la marque');
        $article->setPrix('Le prix');
        $article->setDescription('une description');
        $article->setQuantite('Une quantité');
        $entityManager->persist($article);
        $entityManager->flush();
        return $this->render('index.html.twig',[
            "article" =>$article

        ]);
    }
}