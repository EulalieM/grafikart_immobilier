<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="ADMIN", methods={"GET"})
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
        ]);
    }
}