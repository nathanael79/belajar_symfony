<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\TodoRepository;

class TodoController extends AbstractController
{
    /** 
     * @Route("/todo", name="todo")
    */
    public function index(TodoRepository $repository)
    {
        return $this->render('todo/list.html.twig',[
            'todos'=>$repository->findAll(),
        ]);
    } 


}