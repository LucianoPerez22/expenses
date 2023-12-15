<?php

namespace App\Controller\Backoffice;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Finder\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Main page for Backoffice area
 */
class BackofficeController extends AbstractController
{
    #[Route('/backoffice', name: 'app_backoffice_home')]
    public function index(): Response
    {
        return $this->render('backoffice/backoffice_home.html.twig', [
            'controller_name' => 'BackofficeController',
        ]);
    }
}
