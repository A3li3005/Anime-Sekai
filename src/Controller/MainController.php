<?php

namespace App\Controller;


use App\Entity\Anime;
use App\Entity\Format;
use App\Entity\Search;
use App\simple_html_dom;
use App\Repository\AnimeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(AnimeRepository $repo, Request $request): Response
    {
        
        
        return $this->render('main/index.html.twig');
    }





}
