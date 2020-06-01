<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


use App\Repository\PpSuburbRepository;

class PropertyController extends AbstractController
{
    public function index(PpSuburbRepository $PpSuburbRepository)
    {
        $stats = $PpSuburbRepository->findOneBy(['id'=>3054])->getStats();

        return $this->render('property/index.html.twig', [
            'stats' => $stats,
        ]);
    }
}