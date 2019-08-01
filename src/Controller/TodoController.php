<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TodoController extends AbstractController
{
    /** 
     * @Route("/todo", name="todo")
    */

    public function index(Request $request)
    {
        return $this->render('base.html.twig');
    }


}